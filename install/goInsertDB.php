<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/config_db.php';

$CityRegion = $_POST['CITY_REGION'];
$CityTitle = $_POST['CITY_BIND'];
$CityTitleLat = $_POST['CITY_BIND_LAT'];
$SuitTitle = $_POST['NAME_SITE'];
$SuitDescription = $_POST['DESCRIPTION_SITE'];
$SuitPhoneHeader = $_POST['PHONE_HEADER'];
$PointAddress = isset($_POST['POINT_ADDRESS']) ? trim($_POST['POINT_ADDRESS']) : '';
$PointLat = isset($_POST['POINT_LAT']) ? trim($_POST['POINT_LAT']) : '';
$PointLng = isset($_POST['POINT_LNG']) ? trim($_POST['POINT_LNG']) : '';
$YandexApiKey = isset($_POST['YANDEX_API_KEY']) ? trim($_POST['YANDEX_API_KEY']) : '';

$stepsDirectory = $_SERVER['DOCUMENT_ROOT'].'/install/stepsInsertDB';
$stepFiles = glob($stepsDirectory.'/step*.{php,sql}', GLOB_BRACE);
if ($stepFiles === false) {
    $stepFiles = array();
}
natsort($stepFiles);

$templateReplacements = array(
    '{[NAMECompany]}' => isset($_POST['NAME_COMPANY']) ? $_POST['NAME_COMPANY'] : '',
    '{[CITYBINDTITLE]}' => isset($_POST['CITY_BIND']) ? $_POST['CITY_BIND'] : ''
);

$querySteps = array();
foreach ($stepFiles as $path) {
    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $query = '';
    if ($extension === 'php') {
        $query = include $path;
    } else {
        $query = file_get_contents($path);
    }
    if ($query === false || $query === null) {
        $query = '';
    }
    if ($query !== '') {
        $query = str_replace(array_keys($templateReplacements), array_values($templateReplacements), $query);
        $querySteps[] = array(
            'label' => basename($path),
            'sql' => $query
        );
    }
}

$results = array();
$errors = array();
$postInstallSteps = array();

foreach ($querySteps as $index => $step) {
    $stepResult = array(
        'label' => $step['label'],
        'success' => false,
        'error' => ''
    );

    $link = @mysqli_connect('localhost', $users_db, $password_db, $data_base_name);
    if (!$link) {
        $errorText = 'Ошибка подключения к базе данных: '.mysqli_connect_error();
        $stepResult['error'] = $errorText;
        $errors[] = $errorText;
        $results[] = $stepResult;
        break;
    }

    $sql = trim($step['sql']);
    if ($sql === '') {
        $stepResult['success'] = true;
        $results[] = $stepResult;
        mysqli_close($link);
        continue;
    }

    if (mysqli_multi_query($link, $sql)) {
        $stepResult['success'] = true;
        while (true) {
            if ($result = mysqli_store_result($link)) {
                mysqli_free_result($result);
            }
            if (!mysqli_more_results($link)) {
                break;
            }
            if (!mysqli_next_result($link)) {
                $stepResult['success'] = false;
                $stepResult['error'] = mysqli_error($link);
                $errors[] = 'Ошибка выполнения шага '.($index + 1).': '.$stepResult['error'];
                break;
            }
        }
    } else {
        $stepResult['error'] = mysqli_error($link);
        $errors[] = 'Ошибка выполнения шага '.($index + 1).': '.$stepResult['error'];
    }

    mysqli_close($link);
    $results[] = $stepResult;

    if (!$stepResult['success']) {
        break;
    }
}

if (empty($errors)) {
    $link = @mysqli_connect('localhost', $users_db, $password_db, $data_base_name);
    if (!$link) {
        $errorText = 'Ошибка подключения к базе данных при сохранении точки продаж: ' . mysqli_connect_error();
        $postInstallSteps[] = array(
            'label' => 'Сохранение точки продаж',
            'success' => false,
            'error' => $errorText
        );
        $errors[] = $errorText;
    } else {
        mysqli_set_charset($link, 'utf8');

        if ($YandexApiKey !== '') {
            $escapedKey = mysqli_real_escape_string($link, $YandexApiKey);
            $updateKeySql = "UPDATE `config` SET `keyGeocoder` = '" . $escapedKey . "'";
            if (mysqli_query($link, $updateKeySql)) {
                $postInstallSteps[] = array(
                    'label' => 'Сохранение API-ключа Яндекс.Карт',
                    'success' => true,
                    'error' => ''
                );
            } else {
                $errorText = 'Не удалось сохранить API-ключ Яндекс.Карт: ' . mysqli_error($link);
                $postInstallSteps[] = array(
                    'label' => 'Сохранение API-ключа Яндекс.Карт',
                    'success' => false,
                    'error' => $errorText
                );
                $errors[] = $errorText;
            }
        }

        if ($PointAddress !== '' && $PointLat !== '' && $PointLng !== '') {
            $operatingMode = "<b>Можно забрать заказ</b>\nПн-Вс: 10:00 - 22:40";
            $jsonNoneCheck = json_encode(array('category_none' => (object)array()), JSON_UNESCAPED_UNICODE);

            $worktimeDays = array();
            $worktimeUtcDays = array();
            for ($day = 0; $day <= 6; $day++) {
                $key = (string)$day;
                $worktimeDays[$key] = array(
                    'status' => 'ok',
                    'hoursStart' => '10',
                    'minuteStart' => '00',
                    'hoursStop' => '22',
                    'minuteStop' => '00'
                );
                $worktimeUtcDays[$key] = array(
                    'status' => 'ok',
                    'hoursStart' => '10',
                    'minuteStart' => '00',
                    'hoursStop' => '22',
                    'minuteStop' => '40'
                );
            }

            $worktime = json_encode(array('status' => 1, 'days' => $worktimeDays), JSON_UNESCAPED_UNICODE);
            $worktimeUtc = json_encode(array('status' => 1, 'days' => $worktimeUtcDays), JSON_UNESCAPED_UNICODE);

            $escapedAddress = mysqli_real_escape_string($link, $PointAddress);
            $escapedLat = mysqli_real_escape_string($link, $PointLat);
            $escapedLng = mysqli_real_escape_string($link, $PointLng);
            $escapedOperatingMode = mysqli_real_escape_string($link, $operatingMode);
            $escapedJsonNoneCheck = mysqli_real_escape_string($link, $jsonNoneCheck);
            $escapedWorktime = mysqli_real_escape_string($link, $worktime);
            $escapedWorktimeUtc = mysqli_real_escape_string($link, $worktimeUtc);

            $insertPointSql = "INSERT INTO `points_order` (`id_affilate`, `id_point`, `id_points_pickup`, `id_dot`, `title`, `operating_mode`, `GEO_1`, `GEO_2`, `JsonNoneCheck`, `active`, `deleted`, `worktime`, `timeDeliveryDefault`, `timeDeliveryNew`, `timePickupDefault`, `timePickupNew`, `pincodeOfflinePoints`, `offlinePointsStatus`, `showUser`, `organizationId`, `worktimeUTC`, `UTC_Hourse`) VALUES ('1', '1', '1', '', '" . $escapedAddress . "', '" . $escapedOperatingMode . "', '" . $escapedLat . "', '" . $escapedLng . "', '" . $escapedJsonNoneCheck . "', 1, 0, '" . $escapedWorktime . "', 1, 1, 1, 1, '', 0, 1, NULL, '" . $escapedWorktimeUtc . "', '0')";

            if (mysqli_query($link, $insertPointSql)) {
                $postInstallSteps[] = array(
                    'label' => 'Создание точки продаж',
                    'success' => true,
                    'error' => ''
                );
            } else {
                $errorText = 'Не удалось создать точку продаж: ' . mysqli_error($link);
                $postInstallSteps[] = array(
                    'label' => 'Создание точки продаж',
                    'success' => false,
                    'error' => $errorText
                );
                $errors[] = $errorText;
            }
        } else {
            $errorText = 'Не указаны координаты точки продаж для сохранения.';
            $postInstallSteps[] = array(
                'label' => 'Создание точки продаж',
                'success' => false,
                'error' => $errorText
            );
            $errors[] = $errorText;
        }

        mysqli_close($link);
    }
}

if (!empty($postInstallSteps)) {
    $results = array_merge($results, $postInstallSteps);
}

return array(
    'success' => empty($errors),
    'steps' => $results,
    'errors' => $errors
);

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/config_db.php';

$CityRegion = $_POST['CITY_REGION'];
$CityTitle = $_POST['CITY_BIND'];
$CityTitleLat = $_POST['CITY_BIND_LAT'];
$SuitTitle = $_POST['NAME_SITE'];
$SuitDescription = $_POST['DESCRIPTION_SITE'];
$SuitPhoneHeader = $_POST['PHONE_HEADER'];

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

return array(
    'success' => empty($errors),
    'steps' => $results,
    'errors' => $errors
);

<?php
ini_set('display_errors', 'On');
error_reporting(E_WARNING);

$configPath = __DIR__ . '/../config_db.php';
$stepsDirectory = __DIR__ . '/stepsInsertDB';

$modalData = null;
$activeStep = 1;
$installationComplete = false;
$dbConfigReady = false;
$configContent = '';

$step1Values = array(
    'DB_USER' => '',
    'DB_NAME' => '',
    'DB_PASS' => ''
);
$step1Labels = array(
    'DB_USER' => 'Имя пользователя',
    'DB_NAME' => 'Имя базы данных',
    'DB_PASS' => 'Пароль'
);
$step2Values = array(
    'NAME_COMPANY' => '',
    'NAME_SITE' => '',
    'DESCRIPTION_SITE' => '',
    'CITY_REGION' => '',
    'CITY_BIND' => '',
    'CITY_BIND_LAT' => '',
    'PHONE_HEADER' => '',
    'YANDEX_API_KEY' => '',
    'POINT_ADDRESS' => '',
    'POINT_LAT' => '',
    'POINT_LNG' => ''
);
$step2Labels = array(
    'NAME_COMPANY' => 'Наименование компании',
    'NAME_SITE' => 'Название сайта',
    'DESCRIPTION_SITE' => 'Описание сайта',
    'CITY_REGION' => 'Регион / Область',
    'CITY_BIND' => 'Город',
    'CITY_BIND_LAT' => 'Город (латиницей)',
    'PHONE_HEADER' => 'Телефон для шапки сайта',
    'YANDEX_API_KEY' => 'API ключ Яндекс.Карт',
    'POINT_ADDRESS' => 'Адрес точки продаж',
    'POINT_LAT' => 'Широта точки продаж',
    'POINT_LNG' => 'Долгота точки продаж'
);

function installer_sanitize($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function installer_has_placeholders($content)
{
    return (bool)preg_match('/##[0-9A-Za-z_]+/', $content);
}

function installer_try_connection($user, $pass, $db)
{
    $link = @mysqli_connect('localhost', $user, $pass, $db);
    if (!$link) {
        return array(false, mysqli_connect_error());
    }
    mysqli_close($link);
    return array(true, '');
}

function installer_statistics($directory)
{
    $stats = array(
        'stepCount' => 0,
        'tableCount' => 0,
        'steps' => array()
    );
    $files = glob($directory . '/step*.{php,sql}', GLOB_BRACE);
    if ($files === false || empty($files)) {
        return $stats;
    }
    natsort($files);
    foreach ($files as $file) {
        $content = file_get_contents($file);
        if ($content === false) {
            continue;
        }
        $matches = array();
        preg_match_all('/CREATE TABLE `([^`]+)`/u', $content, $matches);
        $tableCount = isset($matches[1]) ? count($matches[1]) : 0;
        $stats['steps'][] = array(
            'file' => basename($file),
            'tableCount' => $tableCount
        );
        $stats['tableCount'] += $tableCount;
    }
    $stats['stepCount'] = count($stats['steps']);
    return $stats;
}

$statistics = installer_statistics($stepsDirectory);

if (file_exists($configPath)) {
    $configContent = file_get_contents($configPath);
    if ($configContent !== false && !installer_has_placeholders($configContent)) {
        $dbConfigReady = true;
        include $configPath;
        if (isset($users_db, $password_db, $data_base_name)) {
            $link = @mysqli_connect('localhost', $users_db, $password_db, $data_base_name);
            if ($link) {
                $result = mysqli_query($link, "SHOW TABLES LIKE 'config'");
                if ($result && mysqli_num_rows($result) > 0) {
                    $installationComplete = true;
                    $activeStep = 3;
                }
                if ($result) {
                    mysqli_free_result($result);
                }
                mysqli_close($link);
            }
        }
    }
}

if (!$installationComplete && $dbConfigReady) {
    $activeStep = 2;
}

if (!empty($_POST['DB_RESET_DATA'])) {
    $step1Values['DB_USER'] = isset($_POST['DB_USER']) ? trim($_POST['DB_USER']) : '';
    $step1Values['DB_NAME'] = isset($_POST['DB_NAME']) ? trim($_POST['DB_NAME']) : '';
    $step1Values['DB_PASS'] = isset($_POST['DB_PASS']) ? trim($_POST['DB_PASS']) : '';

    $errors = array();
    foreach ($step1Values as $key => $value) {
        if ($value === '') {
            $title = isset($step1Labels[$key]) ? $step1Labels[$key] : $key;
            $errors[] = 'Поле «' . $title . '» обязательно для заполнения.';
        }
    }

    if (empty($errors)) {
        list($connected, $errorText) = installer_try_connection($step1Values['DB_USER'], $step1Values['DB_PASS'], $step1Values['DB_NAME']);
        if (!$connected) {
            $errors[] = 'Не удалось подключиться к базе данных: ' . $errorText;
        }
    }

    if (empty($errors)) {
        $configTemplate = "<?php\n";
        $configTemplate .= "\$users_db='" . addslashes($step1Values['DB_USER']) . "';\n";
        $configTemplate .= "\$password_db='" . addslashes($step1Values['DB_PASS']) . "';\n";
        $configTemplate .= "\$data_base_name='" . addslashes($step1Values['DB_NAME']) . "';\n";
        $configTemplate .= "?>";
        if (@file_put_contents($configPath, $configTemplate) === false) {
            $modalData = array(
                'type' => 'error',
                'title' => 'Ошибка сохранения',
                'messages' => array('Не удалось записать файл config_db.php. Проверьте права на запись.')
            );
        } else {
            $modalData = array(
                'type' => 'success',
                'title' => 'Настройки базы данных сохранены',
                'messages' => array('Данные для подключения успешно сохранены. Продолжайте настройку сайта.')
            );
            $dbConfigReady = true;
            $activeStep = 2;
        }
    } else {
        $modalData = array(
            'type' => 'error',
            'title' => 'Не удалось подключиться к базе',
            'messages' => $errors
        );
    }
}

if (!empty($_POST['SITE_DATA_START']) && $dbConfigReady && !$installationComplete) {
    foreach ($step2Values as $key => $value) {
        $step2Values[$key] = isset($_POST[$key]) ? trim($_POST[$key]) : '';
    }

    $errors = array();
    foreach ($step2Values as $key => $value) {
        if ($value === '') {
            $title = isset($step2Labels[$key]) ? $step2Labels[$key] : $key;
            $errors[] = 'Поле «' . $title . '» обязательно для заполнения.';
        }
    }

    if ($step2Values['POINT_LAT'] !== '' && $step2Values['POINT_LNG'] !== '') {
        if (!is_numeric($step2Values['POINT_LAT']) || !is_numeric($step2Values['POINT_LNG'])) {
            $errors[] = 'Не удалось определить координаты точки продаж. Уточните адрес и установите маркер на карте.';
        }
    }

    if ($step2Values['POINT_LAT'] === '' || $step2Values['POINT_LNG'] === '') {
        $errors[] = 'Укажите адрес точки продаж и установите точку на карте, чтобы сохранить координаты.';
    }

    if (!empty($errors)) {
        $modalData = array(
            'type' => 'error',
            'title' => 'Проверьте введённые данные',
            'messages' => $errors
        );
    } else {
        $installReport = include __DIR__ . '/goInsertDB.php';
        if ($installReport['success']) {
            $modalData = array(
                'type' => 'success',
                'title' => 'Установка завершена',
                'messages' => array(
                    'База данных успешно заполнена. Удалите директорию /install.',
                    'Доступ к панели администратора: логин MainAdmin, пароль MainPassword.'
                ),
                'steps' => $installReport['steps']
            );
            $installationComplete = true;
            $activeStep = 3;
        } else {
            $modalData = array(
                'type' => 'error',
                'title' => 'Во время установки произошли ошибки',
                'messages' => !empty($installReport['errors']) ? $installReport['errors'] : array('Неизвестная ошибка при выполнении запросов.'),
                'steps' => $installReport['steps']
            );
            $activeStep = 2;
        }
    }
}

if ($installationComplete) {
    $activeStep = 3;
}

$stepTitles = array(
    1 => 'Подключение к базе данных',
    2 => 'Настройка сайта',
    3 => 'Готово'
);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Установщик</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Arial, sans-serif;
            background: #f3f4f6;
            color: #1f2933;
        }
        .installer-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
        }
        .installer {
            width: 100%;
            max-width: 960px;
            background: #ffffff;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 25px 50px rgba(15, 23, 42, 0.15);
        }
        .step-indicator {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0 0 24px;
            gap: 12px;
            flex-wrap: wrap;
        }
        .step-indicator li {
            flex: 1 1 30%;
            text-align: center;
            padding: 12px;
            border-radius: 12px;
            background: #eef2ff;
            color: #4c51bf;
            font-weight: 600;
        }
        .step-indicator li.active {
            background: #4c51bf;
            color: #ffffff;
        }
        .form-section h2 {
            margin-top: 0;
            font-size: 24px;
        }
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }
        .form-grid label {
            display: flex;
            flex-direction: column;
            font-size: 14px;
            gap: 6px;
            color: #334155;
        }
        input[type="text"],
        input[type="password"],
        textarea {
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #cbd5f5;
            font-size: 15px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        input[type="text"]:focus,
        input[type="password"]:focus,
        textarea:focus {
            outline: none;
            border-color: #4c51bf;
            box-shadow: 0 0 0 3px rgba(76, 81, 191, 0.2);
        }
        textarea {
            min-height: 120px;
            resize: vertical;
        }
        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
        }
        .btn {
            padding: 12px 22px;
            border-radius: 10px;
            border: none;
            background: #4c51bf;
            color: #ffffff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 20px rgba(76, 81, 191, 0.2);
        }
        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            box-shadow: none;
            transform: none;
        }
        .btn-secondary {
            background: #ffffff;
            color: #4c51bf;
            border: 1px solid #4c51bf;
        }
        .btn-secondary:hover {
            background: #4c51bf;
            color: #ffffff;
        }
        .modules-summary {
            background: #f8fafc;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 24px;
        }
        .modules-summary h3 {
            margin: 0 0 12px;
            font-size: 18px;
        }
        .modules-summary ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .modules-summary li {
            padding: 6px 0;
            font-size: 14px;
            color: #475569;
        }
        .map-section {
            margin-top: 24px;
            padding: 20px;
            background: #f8fafc;
            border-radius: 12px;
        }
        .map-section h3 {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 20px;
        }
        .map-section__description {
            margin: 0 0 16px;
            font-size: 14px;
            color: #475569;
        }
        .map-fields {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: flex-end;
            margin-bottom: 16px;
        }
        .map-fields__item {
            flex: 1 1 240px;
            display: flex;
            flex-direction: column;
            gap: 6px;
            font-size: 14px;
            color: #334155;
        }
        .map-fields__item input {
            width: 100%;
        }
        .map-fields__button {
            margin-left: auto;
        }
        .map-container {
            width: 100%;
            height: 320px;
            border-radius: 12px;
            background: #e2e8f0;
            border: 1px solid #cbd5f5;
            overflow: hidden;
        }
        .map-message {
            margin-top: 10px;
            font-size: 13px;
            color: #475569;
        }
        .map-message--success {
            color: #16a34a;
        }
        .map-message--error {
            color: #dc2626;
        }
        .map-message--info {
            color: #2563eb;
        }
        .final-message {
            text-align: center;
            padding: 40px 0;
        }
        .final-message h2 {
            font-size: 28px;
            margin-bottom: 16px;
        }
        .final-message p {
            margin: 8px 0;
            color: #475569;
        }
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.55);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            z-index: 1000;
        }
        .modal-overlay.open {
            display: flex;
        }
        .modal-window {
            background: #ffffff;
            border-radius: 16px;
            max-width: 520px;
            width: 100%;
            padding: 24px;
            position: relative;
            box-shadow: 0 25px 50px rgba(15, 23, 42, 0.3);
        }
        .modal-window.success {
            border-top: 6px solid #22c55e;
        }
        .modal-window.error {
            border-top: 6px solid #ef4444;
        }
        .modal-window h3 {
            margin-top: 0;
        }
        .modal-close {
            position: absolute;
            top: 12px;
            right: 12px;
            background: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #64748b;
        }
        .modal-body p {
            margin: 8px 0;
        }
        .steps-log {
            margin-top: 16px;
            padding: 12px;
            background: #f8fafc;
            border-radius: 10px;
        }
        .steps-log li {
            margin: 6px 0;
            font-size: 14px;
        }
        @media (max-width: 640px) {
            .installer {
                padding: 20px;
            }
            .actions {
                flex-direction: column;
                align-items: stretch;
            }
            .btn {
                width: 100%;
            }
            .map-fields {
                flex-direction: column;
                align-items: stretch;
            }
            .map-fields__button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="installer-wrapper">
    <div class="installer">
        <ol class="step-indicator">
            <?php foreach ($stepTitles as $number => $title): ?>
                <li class="<?php echo $number === $activeStep ? 'active' : ''; ?>"><?php echo installer_sanitize($title); ?></li>
            <?php endforeach; ?>
        </ol>

        <?php if ($activeStep === 1): ?>
            <div class="form-section">
                <h2>Шаг 1. Подключение к базе данных</h2>
                <p>Укажите данные для подключения к MySQL. Перед продолжением убедитесь, что база данных создана и доступна.</p>
                <form method="post">
                    <div class="form-grid">
                        <label>
                            Имя пользователя
                            <input type="text" name="DB_USER" value="<?php echo installer_sanitize($step1Values['DB_USER']); ?>" required>
                        </label>
                        <label>
                            Имя базы данных
                            <input type="text" name="DB_NAME" value="<?php echo installer_sanitize($step1Values['DB_NAME']); ?>" required>
                        </label>
                        <label>
                            Пароль
                            <input type="password" name="DB_PASS" value="<?php echo installer_sanitize($step1Values['DB_PASS']); ?>" required>
                        </label>
                    </div>
                    <div class="actions">
                        <button class="btn" type="submit" name="DB_RESET_DATA" value="1">Сохранить настройки</button>
                    </div>
                </form>
            </div>
        <?php elseif ($activeStep === 2): ?>
            <div class="form-section">
                <h2>Шаг 2. Основные параметры сайта</h2>
                <p>Заполните данные, необходимые для первоначальной настройки сайта и запусков модулей.</p>
                <div class="modules-summary">
                    <h3>Структура установки</h3>
                    <p>Шагов: <strong><?php echo installer_sanitize($statistics['stepCount']); ?></strong>, таблиц в структуре: <strong><?php echo installer_sanitize($statistics['tableCount']); ?></strong>.</p>
                    <?php if (!empty($statistics['steps'])): ?>
                        <ul>
                            <?php foreach ($statistics['steps'] as $info): ?>
                                <li><?php echo installer_sanitize($info['file']); ?> — таблиц: <?php echo installer_sanitize($info['tableCount']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <form method="post">
                    <div class="form-grid">
                        <label>
                            Наименование компании
                            <input type="text" name="NAME_COMPANY" value="<?php echo installer_sanitize($step2Values['NAME_COMPANY']); ?>" required>
                        </label>
                        <label>
                            Название сайта
                            <input type="text" name="NAME_SITE" value="<?php echo installer_sanitize($step2Values['NAME_SITE']); ?>" required>
                        </label>
                        <label>
                            Описание сайта
                            <textarea name="DESCRIPTION_SITE" required><?php echo installer_sanitize($step2Values['DESCRIPTION_SITE']); ?></textarea>
                        </label>
                        <label>
                            Регион / Область
                            <input type="text" name="CITY_REGION" value="<?php echo installer_sanitize($step2Values['CITY_REGION']); ?>" required>
                        </label>
                        <label>
                            Город
                            <input type="text" name="CITY_BIND" value="<?php echo installer_sanitize($step2Values['CITY_BIND']); ?>" required>
                        </label>
                        <label>
                            Город (латиницей)
                            <input type="text" name="CITY_BIND_LAT" value="<?php echo installer_sanitize($step2Values['CITY_BIND_LAT']); ?>" required>
                        </label>
                        <label>
                            Телефон для шапки сайта
                            <input type="text" name="PHONE_HEADER" value="<?php echo installer_sanitize($step2Values['PHONE_HEADER']); ?>" required>
                        </label>
                    </div>
                    <div class="map-section">
                        <h3>Настройка точки продаж</h3>
                        <p class="map-section__description">Введите адрес и API ключ Яндекс.Карт. По адресу на карте автоматически появится маркер, а координаты сохранятся для точки продаж.</p>
                        <div class="map-fields">
                            <label class="map-fields__item">
                                API ключ Яндекс-Карт
                                <input type="text" name="YANDEX_API_KEY" value="<?php echo installer_sanitize($step2Values['YANDEX_API_KEY']); ?>" placeholder="Введите ключ API" required>
                            </label>
                            <label class="map-fields__item">
                                Адрес точки продаж
                                <input type="text" name="POINT_ADDRESS" id="point-address" value="<?php echo installer_sanitize($step2Values['POINT_ADDRESS']); ?>" placeholder="Город, улица, дом" required>
                            </label>
                            <button type="button" class="btn btn-secondary map-fields__button" id="point-geocode-button">Показать на карте</button>
                        </div>
                        <div id="yandex-map" class="map-container"></div>
                        <div id="point-message" class="map-message"></div>
                        <input type="hidden" name="POINT_LAT" id="point-lat" value="<?php echo installer_sanitize($step2Values['POINT_LAT']); ?>">
                        <input type="hidden" name="POINT_LNG" id="point-lng" value="<?php echo installer_sanitize($step2Values['POINT_LNG']); ?>">
                    </div>
                    <div class="actions">
                        <button class="btn" type="submit" name="SITE_DATA_START" value="1">Запустить установку</button>
                    </div>
                </form>
            </div>
        <?php else: ?>
            <div class="final-message">
                <h2>Установка завершена!</h2>
                <p>Система готова к работе. Не забудьте удалить директорию <strong>/install</strong>.</p>
                <p>Панель администратора доступна по адресу <a href="/admin">/admin</a>.</p>
                <p>Логин: <strong>MainAdmin</strong>, Пароль: <strong>MainPassword</strong></p>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="modal-overlay" id="installer-modal">
    <div class="modal-window" id="installer-modal-window">
        <button class="modal-close" type="button" id="installer-modal-close">×</button>
        <h3 id="installer-modal-title"></h3>
        <div class="modal-body" id="installer-modal-body"></div>
    </div>
</div>

<script>
(function() {
    var modalData = <?php echo json_encode($modalData); ?>;
    if (!modalData) {
        return;
    }
    var overlay = document.getElementById('installer-modal');
    var windowEl = document.getElementById('installer-modal-window');
    var titleEl = document.getElementById('installer-modal-title');
    var bodyEl = document.getElementById('installer-modal-body');
    var closeBtn = document.getElementById('installer-modal-close');

    windowEl.classList.remove('success', 'error');
    if (modalData.type === 'success') {
        windowEl.classList.add('success');
    } else if (modalData.type === 'error') {
        windowEl.classList.add('error');
    }

    titleEl.textContent = modalData.title || '';
    bodyEl.innerHTML = '';

    if (Array.isArray(modalData.messages)) {
        modalData.messages.forEach(function(message) {
            var p = document.createElement('p');
            p.textContent = message;
            bodyEl.appendChild(p);
        });
    }

    if (Array.isArray(modalData.steps)) {
        var hasSteps = modalData.steps.some(function(step) {
            return step && typeof step === 'object';
        });
        if (hasSteps) {
            var stepsTitle = document.createElement('p');
            stepsTitle.textContent = 'Журнал шагов установки:';
            bodyEl.appendChild(stepsTitle);
            var list = document.createElement('ul');
            list.className = 'steps-log';
            modalData.steps.forEach(function(step, index) {
                if (!step) {
                    return;
                }
                var item = document.createElement('li');
                var status = step.success ? 'успешно' : 'ошибка';
                var text = 'Шаг ' + (index + 1) + ' (' + (step.label || 'шаг') + ') — ' + status;
                if (step.error) {
                    text += ': ' + step.error;
                }
                item.textContent = text;
                list.appendChild(item);
            });
            bodyEl.appendChild(list);
        }
    }

    var closeModal = function() {
        overlay.classList.remove('open');
    };

    overlay.classList.add('open');
    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', function(event) {
        if (event.target === overlay) {
            closeModal();
        }
    });
})();

(function() {
    var apiKeyInput = document.querySelector('input[name="YANDEX_API_KEY"]');
    var addressInput = document.getElementById('point-address');
    var latInput = document.getElementById('point-lat');
    var lngInput = document.getElementById('point-lng');
    var geocodeButton = document.getElementById('point-geocode-button');
    var mapContainer = document.getElementById('yandex-map');
    var messageEl = document.getElementById('point-message');

    if (!apiKeyInput || !addressInput || !latInput || !lngInput || !geocodeButton || !mapContainer || !messageEl) {
        return;
    }

    var mapInstance = null;
    var placemark = null;
    var yandexMapsPromise = null;
    var yandexMapsKeyLoaded = null;
    var mapsApi = null;

    var DEFAULT_COORDS = [55.751244, 37.618423];

    function showMessage(text, type) {
        messageEl.textContent = text || '';
        messageEl.className = 'map-message' + (type ? ' map-message--' + type : '');
    }

    if (!latInput.value || !lngInput.value) {
        showMessage('Укажите адрес и нажмите «Показать на карте», чтобы получить координаты точки продаж.', 'info');
    }

    function ensureYandexMaps() {
        var key = apiKeyInput.value.trim();
        if (!key) {
            showMessage('Укажите API-ключ Яндекс.Карт, чтобы инициализировать карту.', 'error');
            return Promise.reject(new Error('missing-key'));
        }
        if (yandexMapsKeyLoaded && yandexMapsKeyLoaded !== key) {
            showMessage('Карта уже загружена с другим API-ключом. Перезагрузите страницу, чтобы использовать новый ключ.', 'error');
            return Promise.reject(new Error('key-mismatch'));
        }
        if (window.ymaps && typeof window.ymaps.Map === 'function') {
            return Promise.resolve(window.ymaps);
        }
        if (yandexMapsPromise) {
            return yandexMapsPromise;
        }

        yandexMapsKeyLoaded = key;
        showMessage('Загружается карта…', 'info');

        yandexMapsPromise = new Promise(function(resolve, reject) {
            var script = document.createElement('script');
            script.src = 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=' + encodeURIComponent(key);
            script.async = true;
            script.onload = function() {
                if (!window.ymaps) {
                    yandexMapsPromise = null;
                    showMessage('Не удалось инициализировать Яндекс.Карты. Повторите попытку позже.', 'error');
                    reject(new Error('ymaps-not-loaded'));
                    return;
                }
                window.ymaps.ready(function() {
                    resolve(window.ymaps);
                });
            };
            script.onerror = function() {
                yandexMapsPromise = null;
                yandexMapsKeyLoaded = null;
                showMessage('Не удалось загрузить Яндекс.Карты. Проверьте API-ключ и соединение с сетью.', 'error');
                reject(new Error('script-error'));
            };
            document.head.appendChild(script);
        });

        return yandexMapsPromise;
    }

    function updateCoords(coords, silent) {
        if (!Array.isArray(coords) || coords.length < 2) {
            return;
        }
        var lat = parseFloat(coords[0]);
        var lng = parseFloat(coords[1]);
        if (isNaN(lat) || isNaN(lng)) {
            return;
        }
        latInput.value = lat.toFixed(6);
        lngInput.value = lng.toFixed(6);
        if (!silent) {
            showMessage('Координаты обновлены по положению маркера.', 'info');
        }
    }

    function reverseGeocode(coords) {
        if (!mapsApi || !Array.isArray(coords) || coords.length < 2) {
            return;
        }

        mapsApi.geocode(coords, { results: 1 }).then(function(res) {
            var geoObject = res.geoObjects.get(0);
            if (!geoObject) {
                showMessage('Не удалось определить адрес по выбранной точке. Уточните расположение маркера.', 'error');
                return;
            }

            var addressLine = geoObject.getAddressLine();
            if (addressLine) {
                addressInput.value = addressLine;
            }
            showMessage('Адрес и координаты обновлены по положению маркера.', 'success');
        }, function() {
            showMessage('Не удалось выполнить обратное геокодирование. Попробуйте снова.', 'error');
        });
    }

    function initializeMap(ymaps) {
        mapsApi = ymaps;
        if (mapInstance) {
            return;
        }

        var lat = parseFloat(latInput.value);
        var lng = parseFloat(lngInput.value);
        var hasCoords = !isNaN(lat) && !isNaN(lng);
        var startCoords = hasCoords ? [lat, lng] : DEFAULT_COORDS;

        mapInstance = new ymaps.Map('yandex-map', {
            center: startCoords,
            zoom: hasCoords ? 15 : 12,
            controls: ['zoomControl', 'searchControl']
        });

        placemark = new ymaps.Placemark(startCoords, {}, {
            draggable: true
        });
        mapInstance.geoObjects.add(placemark);

        placemark.events.add('dragend', function() {
            var newCoords = placemark.geometry.getCoordinates();
            updateCoords(newCoords, true);
            reverseGeocode(newCoords);
        });

        mapInstance.events.add('click', function(event) {
            var newCoords = event.get('coords');
            if (placemark) {
                placemark.geometry.setCoordinates(newCoords);
            }
            updateCoords(newCoords, true);
            reverseGeocode(newCoords);
        });

        if (!hasCoords) {
            updateCoords(startCoords, true);
        }

        showMessage('Укажите адрес и нажмите «Показать на карте», чтобы получить координаты точки продаж.', 'info');
    }

    function geocodeAddress() {
        ensureYandexMaps().then(function(ymaps) {
            initializeMap(ymaps);
            var address = addressInput.value.trim();
            if (!address) {
                showMessage('Введите адрес точки продаж для поиска на карте.', 'error');
                return;
            }
            showMessage('Ищем адрес…', 'info');
            ymaps.geocode(address).then(function(res) {
                var geoObject = res.geoObjects.get(0);
                if (!geoObject) {
                    showMessage('По введенному адресу ничего не найдено. Уточните адрес и попробуйте снова.', 'error');
                    return;
                }
                var coords = geoObject.geometry.getCoordinates();
                var displayAddress = geoObject.getAddressLine();
                if (placemark) {
                    placemark.geometry.setCoordinates(coords);
                }
                if (mapInstance) {
                    mapInstance.setCenter(coords, 16, { duration: 300 });
                }
                if (displayAddress) {
                    addressInput.value = displayAddress;
                }
                updateCoords(coords, true);
                showMessage('Адрес найден, координаты сохранены автоматически.', 'success');
            }, function() {
                showMessage('Не удалось выполнить геокодирование. Повторите попытку позже.', 'error');
            });
        }).catch(function(error) {
            if (error && error.message === 'missing-key') {
                apiKeyInput.focus();
            }
        });
    }

    geocodeButton.addEventListener('click', function(event) {
        event.preventDefault();
        geocodeAddress();
    });

    addressInput.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            geocodeAddress();
        }
    });

    if (apiKeyInput.value.trim() && latInput.value && lngInput.value) {
        ensureYandexMaps().then(function(ymaps) {
            initializeMap(ymaps);
            var lat = parseFloat(latInput.value);
            var lng = parseFloat(lngInput.value);
            if (!isNaN(lat) && !isNaN(lng) && placemark && mapInstance) {
                var coords = [lat, lng];
                placemark.geometry.setCoordinates(coords);
                mapInstance.setCenter(coords, 15);
            }
        }).catch(function() {
            // Ошибки загрузки карты уже отображаются пользователю.
        });
    }
})();
</script>
</body>
</html>

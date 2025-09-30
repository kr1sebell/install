<?php
declare(strict_types=1);

namespace Installer;

use Installer\Support\ConfigWriter;
use Installer\Support\DatabaseManager;
use Installer\Support\Logger;
use Installer\Support\SchemaManager;
use mysqli_sql_exception;
use RuntimeException;

class Installer
{
    private string $basePath;
    private Logger $logger;
    private ConfigWriter $configWriter;

    public function __construct(string $basePath)
    {
        $this->basePath = rtrim($basePath, '/');
        $this->logger = new Logger($this->basePath . '/logs');
        $this->configWriter = new ConfigWriter(
            $this->basePath . '/../config_db.php',
            $this->basePath . '/original_db_config.php'
        );
    }

    public function handle(): void
    {
        $step = $_GET['step'] ?? 'database';

        try {
            switch ($step) {
                case 'database':
                    $this->handleDatabaseStep();
                    break;
                case 'site':
                    $this->handleSiteStep();
                    break;
                case 'install':
                    $this->handleInstallStep();
                    break;
                case 'done':
                    $this->render('done', [
                        'log' => $this->logger->tail(),
                        'configExists' => is_file($this->basePath . '/../config_db.php'),
                    ]);
                    break;
                default:
                    $this->redirect('database');
            }
        } catch (RuntimeException $exception) {
            $this->logger->error($exception->getMessage());
            $this->render('error', [
                'message' => $exception->getMessage(),
            ]);
        }
    }

    private function handleDatabaseStep(): void
    {
        $state = $this->getState();
        $data = $state['database'] ?? [];
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'host' => trim($_POST['db_host'] ?? '127.0.0.1'),
                'port' => trim($_POST['db_port'] ?? '3306'),
                'name' => trim($_POST['db_name'] ?? ''),
                'user' => trim($_POST['db_user'] ?? ''),
                'password' => (string)($_POST['db_pass'] ?? ''),
            ];

            $errors = $this->validateDatabaseData($data);

            if (!$errors) {
                $manager = new DatabaseManager($data);

                try {
                    $manager->testConnection();
                    $this->configWriter->write($data);
                    $state['database'] = $data;
                    $this->setState($state);
                    $this->logger->info('Database connection saved.');
                    $this->redirect('site');
                } catch (mysqli_sql_exception $exception) {
                    $errors[] = 'Не удалось подключиться к базе данных: ' . $exception->getMessage();
                    $this->logger->error('Database connection failed: ' . $exception->getMessage());
                }
            }
        }

        $this->render('database', [
            'data' => $data,
            'errors' => $errors,
        ]);
    }

    private function handleSiteStep(): void
    {
        $state = $this->getState();
        if (empty($state['database'])) {
            $this->redirect('database');
            return;
        }

        $data = $state['site'] ?? [
            'company_name' => '',
            'site_name' => '',
            'site_description' => '',
            'region' => '',
            'city' => '',
            'city_lat' => '',
            'phone' => '',
            'admin_login' => 'MainAdmin',
            'admin_password' => 'MainPassword',
        ];

        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'company_name' => trim($_POST['company_name'] ?? ''),
                'site_name' => trim($_POST['site_name'] ?? ''),
                'site_description' => trim($_POST['site_description'] ?? ''),
                'region' => trim($_POST['region'] ?? ''),
                'city' => trim($_POST['city'] ?? ''),
                'city_lat' => trim($_POST['city_lat'] ?? ''),
                'phone' => trim($_POST['phone'] ?? ''),
                'admin_login' => trim($_POST['admin_login'] ?? ''),
                'admin_password' => (string)($_POST['admin_password'] ?? ''),
                'admin_password_confirm' => (string)($_POST['admin_password_confirm'] ?? ''),
            ];

            $errors = $this->validateSiteData($data);

            if (!$errors) {
                unset($data['admin_password_confirm']);
                $state['site'] = $data;
                $this->setState($state);
                $this->logger->info('Site settings saved.');
                $this->redirect('install');
            }
        }

        $this->render('site', [
            'data' => $data,
            'errors' => $errors,
        ]);
    }

    private function handleInstallStep(): void
    {
        $state = $this->getState();
        if (empty($state['database'])) {
            $this->redirect('database');
            return;
        }
        if (empty($state['site'])) {
            $this->redirect('site');
            return;
        }

        $errors = [];
        $success = false;
        $executed = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dbConfig = $state['database'];
            $site = $state['site'];
            $manager = new DatabaseManager($dbConfig);
            $schema = new SchemaManager($this->basePath . '/schema', $manager, $this->logger);

            $replacements = [
                'COMPANY_NAME' => $site['company_name'],
                'SITE_NAME' => $site['site_name'],
                'SITE_DESCRIPTION' => $site['site_description'],
                'CITY_REGION' => $site['region'],
                'CITY_TITLE' => $site['city'],
                'CITY_LAT' => $site['city_lat'],
                'PHONE' => $site['phone'],
                'ADMIN_LOGIN' => $site['admin_login'],
                'ADMIN_PASSWORD' => $site['admin_password'],
            ];

            try {
                $executed = $schema->execute($replacements);
                $success = true;
                $state['installed'] = true;
                $this->setState($state);
                $this->logger->info('Database schema installed successfully.');
            } catch (RuntimeException | mysqli_sql_exception $exception) {
                $errors[] = 'Ошибка при установке базы данных: ' . $exception->getMessage();
                $this->logger->error('Installation failed: ' . $exception->getMessage());
            }
        }

        $this->render('install', [
            'db' => $state['database'],
            'site' => $state['site'],
            'errors' => $errors,
            'success' => $success,
            'executed' => $executed,
            'log' => $this->logger->tail(),
        ]);
    }

    private function validateDatabaseData(array $data): array
    {
        $errors = [];

        if ($data['host'] === '') {
            $errors[] = 'Укажите хост базы данных.';
        }
        if ($data['name'] === '') {
            $errors[] = 'Укажите имя базы данных.';
        }
        if ($data['user'] === '') {
            $errors[] = 'Укажите пользователя базы данных.';
        }
        if ($data['port'] === '') {
            $data['port'] = '3306';
        }

        if (!ctype_digit((string)$data['port'])) {
            $errors[] = 'Порт базы данных должен содержать только цифры.';
        }

        return $errors;
    }

    private function validateSiteData(array $data): array
    {
        $errors = [];

        if ($data['company_name'] === '') {
            $errors[] = 'Укажите название компании.';
        }
        if ($data['site_name'] === '') {
            $errors[] = 'Укажите название сайта.';
        }
        if ($data['region'] === '') {
            $errors[] = 'Укажите регион или область.';
        }
        if ($data['city'] === '') {
            $errors[] = 'Укажите город.';
        }
        if ($data['city_lat'] === '') {
            $errors[] = 'Укажите город латиницей.';
        }
        if ($data['phone'] === '') {
            $errors[] = 'Укажите телефон для отображения пользователям.';
        }
        if ($data['admin_login'] === '') {
            $errors[] = 'Задайте логин администратора.';
        }
        if ($data['admin_password'] === '') {
            $errors[] = 'Задайте пароль администратора.';
        }
        if ($data['admin_password'] !== ($data['admin_password_confirm'] ?? '')) {
            $errors[] = 'Пароли администратора не совпадают.';
        }

        return $errors;
    }

    private function render(string $view, array $params = []): void
    {
        $viewPath = $this->basePath . '/templates/steps/' . $view . '.php';
        if (!is_file($viewPath)) {
            throw new RuntimeException('Не найден шаблон: ' . $view);
        }

        $params['currentStep'] = $_GET['step'] ?? 'database';
        $params['isInstalled'] = ($this->getState()['installed'] ?? false) === true;

        extract($params);

        ob_start();
        include $viewPath;
        $content = ob_get_clean();

        include $this->basePath . '/templates/layout.php';
    }

    private function redirect(string $step): void
    {
        header('Location: ?step=' . urlencode($step));
        exit;
    }

    private function getState(): array
    {
        return $_SESSION['installer'] ?? [];
    }

    private function setState(array $state): void
    {
        $_SESSION['installer'] = $state;
    }
}

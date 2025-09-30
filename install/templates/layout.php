<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Установщик</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        :root {
            color-scheme: light dark;
            font-family: "Segoe UI", Roboto, sans-serif;
        }
        body {
            margin: 0;
            background: #f5f7fa;
            color: #1f2933;
        }
        .wrapper {
            max-width: 960px;
            margin: 0 auto;
            padding: 32px 16px 64px;
        }
        header {
            margin-bottom: 32px;
        }
        h1 {
            font-size: 28px;
            margin: 0 0 12px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }
        nav li {
            padding: 8px 14px;
            border-radius: 20px;
            background: #e5e9f0;
            font-size: 14px;
        }
        nav li.active {
            background: #2563eb;
            color: #fff;
        }
        nav li.done {
            background: #059669;
            color: #fff;
        }
        .card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
            padding: 24px;
        }
        label {
            display: block;
            margin-bottom: 4px;
            font-weight: 600;
        }
        input, textarea {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            font-size: 15px;
            box-sizing: border-box;
            margin-bottom: 18px;
        }
        button {
            background: #2563eb;
            color: #fff;
            border: none;
            padding: 12px 18px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        button.secondary {
            background: #1f2937;
        }
        .errors {
            margin-bottom: 20px;
            border-radius: 12px;
            padding: 16px;
            background: #fee2e2;
            color: #991b1b;
        }
        .success {
            margin-bottom: 20px;
            border-radius: 12px;
            padding: 16px;
            background: #dcfce7;
            color: #166534;
        }
        pre.log {
            background: #0f172a;
            color: #e2e8f0;
            padding: 16px;
            border-radius: 12px;
            overflow: auto;
            max-height: 280px;
            font-size: 13px;
        }
        .summary {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-bottom: 20px;
        }
        .summary .item {
            background: #f1f5f9;
            padding: 16px;
            border-radius: 12px;
        }
        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 16px;
        }
        a.button {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 10px;
            text-decoration: none;
            background: #1f2937;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <header>
        <h1>Мастер установки</h1>
        <nav>
            <ul>
                <?php
                $steps = [
                    'database' => '1. База данных',
                    'site' => '2. Настройки сайта',
                    'install' => '3. Установка',
                    'done' => '4. Готово',
                ];
                foreach ($steps as $key => $title):
                    $class = [];
                    if ($currentStep === $key) {
                        $class[] = 'active';
                    }
                    if ($key === 'done' && $isInstalled) {
                        $class[] = 'done';
                    }
                    ?>
                    <li class="<?= implode(' ', $class) ?>"><?= htmlspecialchars($title, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <main class="card">
        <?= $content ?>
    </main>
</div>
</body>
</html>

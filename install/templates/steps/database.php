<h2>Шаг 1. Подключение к базе данных</h2>
<p>Укажите параметры доступа к серверу MySQL. Мы проверим соединение и запишем конфигурацию в <code>config_db.php</code>.</p>

<?php if (!empty($errors)): ?>
    <div class="errors">
        <strong>Исправьте ошибки:</strong>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form method="post" autocomplete="off">
    <label for="db_host">Хост</label>
    <input id="db_host" name="db_host" value="<?= htmlspecialchars($data['host'] ?? '127.0.0.1', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="db_port">Порт</label>
    <input id="db_port" name="db_port" value="<?= htmlspecialchars($data['port'] ?? '3306', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="db_name">Имя базы данных</label>
    <input id="db_name" name="db_name" value="<?= htmlspecialchars($data['name'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="db_user">Пользователь</label>
    <input id="db_user" name="db_user" value="<?= htmlspecialchars($data['user'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="db_pass">Пароль</label>
    <input id="db_pass" name="db_pass" type="password" value="<?= htmlspecialchars($data['password'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">

    <button type="submit">Сохранить и продолжить</button>
</form>

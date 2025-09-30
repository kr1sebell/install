<h2>Шаг 2. Базовые настройки сайта</h2>
<p>Эти данные используются при первичной настройке. Значения можно изменить позже в панели администратора.</p>

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
    <label for="company_name">Название компании</label>
    <input id="company_name" name="company_name" value="<?= htmlspecialchars($data['company_name'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="site_name">Название сайта</label>
    <input id="site_name" name="site_name" value="<?= htmlspecialchars($data['site_name'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="site_description">Описание сайта</label>
    <textarea id="site_description" name="site_description" rows="3" required><?= htmlspecialchars($data['site_description'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></textarea>

    <label for="region">Регион / область</label>
    <input id="region" name="region" value="<?= htmlspecialchars($data['region'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="city">Город (отображение)</label>
    <input id="city" name="city" value="<?= htmlspecialchars($data['city'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="city_lat">Город (латиницей)</label>
    <input id="city_lat" name="city_lat" value="<?= htmlspecialchars($data['city_lat'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="phone">Телефон для клиентов</label>
    <input id="phone" name="phone" value="<?= htmlspecialchars($data['phone'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="admin_login">Логин администратора</label>
    <input id="admin_login" name="admin_login" value="<?= htmlspecialchars($data['admin_login'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="admin_password">Пароль администратора</label>
    <input id="admin_password" name="admin_password" type="password" value="<?= htmlspecialchars($data['admin_password'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <label for="admin_password_confirm">Подтвердите пароль</label>
    <input id="admin_password_confirm" name="admin_password_confirm" type="password" value="<?= htmlspecialchars($data['admin_password'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" required>

    <button type="submit">Сохранить и продолжить</button>
</form>

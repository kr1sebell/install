<h2>Шаг 3. Установка базы данных</h2>
<p>Проверьте введённые данные и запустите установку. Скрипт создаст структуру базы данных и заполнит её стартовыми данными.</p>

<div class="summary">
    <div class="item">
        <strong>Подключение</strong>
        <div>Хост: <?= htmlspecialchars($db['host'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
        <div>Порт: <?= htmlspecialchars($db['port'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
        <div>База: <?= htmlspecialchars($db['name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
        <div>Пользователь: <?= htmlspecialchars($db['user'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
    </div>
    <div class="item">
        <strong>Сайт</strong>
        <div>Компания: <?= htmlspecialchars($site['company_name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
        <div>Сайт: <?= htmlspecialchars($site['site_name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
        <div>Город: <?= htmlspecialchars($site['city'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
        <div>Телефон: <?= htmlspecialchars($site['phone'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
    </div>
    <div class="item">
        <strong>Администратор</strong>
        <div>Логин: <?= htmlspecialchars($site['admin_login'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
        <div>Пароль: <?= htmlspecialchars($site['admin_password'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></div>
    </div>
</div>

<?php if (!empty($errors)): ?>
    <div class="errors">
        <strong>Возникли ошибки:</strong>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if ($success): ?>
    <div class="success">Установка завершена успешно.</div>
    <div class="actions">
        <a class="button" href="?step=done">Перейти к финальному шагу</a>
    </div>
<?php else: ?>
    <form method="post">
        <button type="submit">Выполнить установку</button>
        <a class="button" href="?step=site">Назад</a>
    </form>
<?php endif; ?>

<?php if (!empty($executed)): ?>
    <h3>Выполненные файлы</h3>
    <ul>
        <?php foreach ($executed as $file): ?>
            <li><?= htmlspecialchars($file, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<h3>Журнал установки</h3>
<pre class="log"><?= htmlspecialchars($log ?: 'Журнал пока пуст.', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></pre>

<h2>Шаг 4. Завершение</h2>
<?php if ($isInstalled): ?>
    <div class="success">Поздравляем! База данных готова к работе. Удалите каталог <code>/install</code> из публичной директории сайта.</div>
    <p>Вы можете перейти в панель администратора, используя заданные логин и пароль.</p>
<?php else: ?>
    <p>Установка ещё не запускалась. Вернитесь на предыдущие шаги и выполните настройку.</p>
<?php endif; ?>

<h3>Журнал установки</h3>
<pre class="log"><?= htmlspecialchars($log ?: 'Журнал пока пуст.', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></pre>

<?php if ($configExists): ?>
    <p>Файл конфигурации <code>config_db.php</code> успешно создан.</p>
<?php else: ?>
    <p class="errors">Файл <code>config_db.php</code> не найден. Проверьте права на запись и повторите установку.</p>
<?php endif; ?>

<div class="actions">
    <a class="button" href="/">Перейти на сайт</a>
    <a class="button" href="/admin">Открыть панель администратора</a>
</div>

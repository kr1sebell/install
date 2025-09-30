<h2>Произошла ошибка</h2>
<div class="errors">
    <?= htmlspecialchars($message ?? 'Неизвестная ошибка.', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
</div>
<div class="actions">
    <a class="button" href="?step=database">Начать заново</a>
</div>

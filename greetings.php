<?php
$name = $_POST['name'] ?? '';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Greeting</title>
</head>
<body>
<form method="post" action="">
    <!-- htmlspecialchars in een php functie die speciale tekens omzet naar HTML-entities -->
    <label>Naam: <input type="text" name="name" value="<?= htmlspecialchars($name) ?>"></label>
    <button type="submit">Verstuur</button>
</form>
<hr>
<?php if ($name): ?>
    Hallo <?= htmlspecialchars($name) ?>, leuk dat je er bent
<?php else: ?>
    Geen naam opgegeven.
<?php endif; ?>
</body>
</html>
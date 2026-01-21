<?php
$firstname = $_POST['firstname'] ?? '';
$age = $_POST['age'] ?? '';

// htmlspecialchars in een php functie die speciale tekens omzet naar HTML-entities
$firstname = htmlspecialchars($firstname);
$age = htmlspecialchars($age);
// !empty controleert of een variabel niet leeg is
if (!empty($firstname) & !empty($age)) {
    echo "Hallo $firstname, je bent $age jaar oud.";
} else {
    echo "In sommige velden ontbreken worden/cijfers.<br>";
}
echo '<br><br><a href="form.php">klik hier om terug te gaan naar het formulier</a>';
?>
<!-- echo print het gene wat je in de aanhalingstekens zet in de browser -->
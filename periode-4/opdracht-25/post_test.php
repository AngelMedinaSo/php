<?php
// Verwerk het formulier als het verstuurd is
$titel = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titel = $_POST["titel"];
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>POST Test</title>
</head>
<body>

    <h1>POST Formulier</h1>

    <form method="POST">
        <label>Titel:</label>
        <input type="text" name="titel">
        <button type="submit">Verstuur</button>
    </form>

    <hr>

    <h2>Inhoud van $_POST:</h2>
    <?php
        // Toon alle data in $_POST
        var_dump($_POST);
    ?>

    <h2>Waarde van titel:</h2>
    <?php
        // Toon specifiek de waarde van titel
        if (!empty($titel)) {
            echo "Titel: " . $titel;
        } else {
            echo "Nog geen titel ingevuld.";
        }
    ?>

</body>
</html>

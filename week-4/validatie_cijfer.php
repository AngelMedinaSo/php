<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validatie cijfer</title>
</head>

<body>
    <form method="POST" action="">
        <label for="aantal">Aantal:</label>
        <input type="text" name="aantal" id="aantal">
        <button type="submit">Controleer</button>
    </form>

    <?php
    if (!empty($_POST)) {
        $aantal = trim($_POST['aantal'] ?? '');

        if (empty($aantal)) {
            echo "Voer een waarde in.";
            exit;
        }

        if (!is_numeric($aantal)) {
            echo "Voer een geldig getal in.";
            exit;
        }

        echo "Het is wel een aantal.";
    }
    ?>  
</body>

</html>
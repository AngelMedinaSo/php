<?php
$titel = $_POST['titel'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form method="POST" action="">
        <label for="titel">Titel:</label>
        <input type="text" name="titel" id="titel">
        <button type="submit">Submit</button>
    </form>

    <h2>Inhoud van $_POST</h2>
    <p><?php print_r($_POST); ?></p>

    <h2>Waarde van titel</h2>
    <p><?php echo $titel; ?></p>
</body>
</html>

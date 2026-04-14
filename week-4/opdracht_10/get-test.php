<?php
$titel = $_GET['titel'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <form method="GET">
        <label for="titel">Titel:</label>
        <input type="text" name="titel" id="titel">
        <button type="submit">Submit</button>
    </form>

    <h2>Inhoud van $_GET</h2>
    <p><?php print_r($_GET); ?></p>

    <h2>Waarde van titel</h2>
    <p><?php echo$titel; ?></p>
</body>
</html>

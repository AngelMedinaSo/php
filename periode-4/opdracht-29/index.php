<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "items";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Verbinding mislukt: " . $e->getMessage();
    exit;
}

$sql   = "SELECT * FROM items";
$stmt  = $conn->prepare($sql);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Itemlijst</title>
</head>
<body>

    <h1>Alle items</h1>

    <?php foreach ($items as $item): ?>
        <p>
            <?= htmlspecialchars($item['titel']) ?>
            <a href="delete.php?id=<?= $item['ID'] ?>">Verwijderen</a>
        </p>
    <?php endforeach; ?>

</body>
</html>

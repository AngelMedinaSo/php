<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Item ophalen</title>
</head>
<body>

<?php

$id = (int) $_GET['id'];
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

$sql  = "SELECT * FROM items WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

$item = $stmt->fetch(PDO::FETCH_ASSOC);

if ($item) {
    echo "<h1>" . htmlspecialchars($item['titel'] ?? '') . "</h1>";
    echo "<p>" . htmlspecialchars($item['beschrijving'] ?? '') . "</p>";
} else {
    echo "Geen item gevonden met ID " . $id . ".";
}
?>

</body>
</html>

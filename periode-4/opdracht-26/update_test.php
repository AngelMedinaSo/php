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

$titel = "Nieuwe titel";
$id    = 1;

$sql  = "UPDATE items SET titel = ? WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$titel, $id]);
?>

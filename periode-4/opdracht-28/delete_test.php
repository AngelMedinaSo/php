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

$id = 1;

$sql  = "DELETE FROM items WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
?>

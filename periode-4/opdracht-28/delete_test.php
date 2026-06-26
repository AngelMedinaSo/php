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

// Testdata
$id = 3;

$sql  = "DELETE FROM items WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

echo "Item verwijderd! ID " . $id . " is niet meer aanwezig in de database.";
?>

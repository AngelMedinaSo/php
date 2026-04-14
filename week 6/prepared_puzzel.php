<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "items";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// 2) Testdata (doe alsof dit uit een formulier komt)
$titel = "Test item";
$omschrijving = "Dit is een test.";

// 3) Prepared statement (vul de placeholders aan)
$sql = "INSERT INTO items (titel, omschrijving) VALUES (:titel, :omschrijving)";
$stmt = $conn->prepare($sql);

// 4) Uitvoeren met execute (kies 1 manier)
// Manier A: execute met array
$stmt->execute([
    ":titel" => $titel,
    ":omschrijving" => $omschrijving
]);

echo "Insert gelukt (als je geen error ziet).";
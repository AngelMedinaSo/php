<?php

/*
==============================================
    OPDRACHT 32 - Fout in een UPDATE query
==============================================

De foutieve query:

    UPDATE items SET titel = 'Test'

----------------------------------------------
    Wat gaat hier mis?
----------------------------------------------

Er ontbreekt een WHERE.

Zonder WHERE weet de database niet welk record
aangepast moet worden. Het resultaat is dat ALLE
rijen in de tabel worden aangepast.

Dus alle titels in de tabel worden 'Test'.

----------------------------------------------
    Waarom is dit gevaarlijk?
----------------------------------------------

Je overschrijft alle data in die kolom in een keer.
Er is geen bevestiging of waarschuwing.
Dit is moeilijk of niet terug te draaien zonder backup.

----------------------------------------------
    De correcte query:
----------------------------------------------

    UPDATE items SET titel = 'Test' WHERE ID = 1

Met WHERE ID = 1 wordt alleen het record met ID 1
aangepast. De rest blijft onveranderd.

==============================================
*/

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

// Correcte query met WHERE
$id    = 1;
$titel = "Test";

$sql  = "UPDATE items SET titel = ? WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$titel, $id]);

echo "Alleen ID " . $id . " is aangepast naar: " . $titel;
?>

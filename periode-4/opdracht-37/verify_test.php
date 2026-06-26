<?php

$wachtwoord = "geheim123";
$hash       = password_hash($wachtwoord, PASSWORD_DEFAULT);

echo "Hash: " . $hash;
echo "<br><br>";

// Test 1: correct wachtwoord
$test1 = "geheim123";

if (password_verify($test1, $hash)) {
    echo "Test 1 - Correct wachtwoord";
} else {
    echo "Test 1 - Onjuist wachtwoord";
}

echo "<br>";

// Test 2: fout wachtwoord
$test2 = "verkeerd456";

if (password_verify($test2, $hash)) {
    echo "Test 2 - Correct wachtwoord";
} else {
    echo "Test 2 - Onjuist wachtwoord";
}

/*
----------------------------------------------
    DENKNAVRAGEN
----------------------------------------------

Waarom kun je een wachtwoord niet gewoon vergelijken met ==?
    De hash ziet er elke keer anders uit door de salt.
    "geheim123" == "$2y$10$abc..." is altijd false,
    ook als het wachtwoord klopt.
    password_verify() weet hoe de hash is opgebouwd
    en kan het correct controleren.

Wat gebeurt er als je een verkeerd wachtwoord test?
    password_verify() geeft false terug.
    De gebruiker krijgt "Onjuist wachtwoord" te zien.
----------------------------------------------
*/
?>

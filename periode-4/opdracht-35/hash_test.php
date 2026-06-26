<?php

$wachtwoord = "geheim123";

$hash = password_hash($wachtwoord, PASSWORD_DEFAULT);

echo "Origineel wachtwoord: " . $wachtwoord;
echo "<br>";
echo "Hash: " . $hash;

/*
----------------------------------------------
    DENKNAVRAGEN
----------------------------------------------

Waarom ziet de hash er elke keer anders uit?
    password_hash() voegt automatisch een willekeurige
    "salt" toe aan het wachtwoord voor het hashen.
    Daardoor is de uitkomst elke keer anders,
    ook al is het wachtwoord hetzelfde.

Waarom is dat juist goed?
    Als twee gebruikers hetzelfde wachtwoord hebben,
    zien hun hashes er toch anders uit.
    Hackers kunnen dan geen lijsten van bekende hashes
    gebruiken om wachtwoorden te raden (rainbow tables).
----------------------------------------------
*/
?>

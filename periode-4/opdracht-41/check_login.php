<?php

session_start();

if (!isset($_SESSION['user'])) {
    echo "Niet ingelogd";
} else {
    echo "Welkom, " . $_SESSION['user'] . "!";
}

/*
----------------------------------------------
    DENKNAVRAGEN
----------------------------------------------

Waarom gebruiken we isset()?
    $_SESSION['user'] bestaat misschien niet.
    Als je die variabele direct gebruikt zonder
    isset() te controleren, geeft PHP een foutmelding.
    isset() controleert eerst of de variabele bestaat
    voordat je hem gebruikt.

Wat gebeurt er als de session niet bestaat?
    isset() geeft false terug.
    De code gaat naar het if-blok en toont
    "Niet ingelogd".
----------------------------------------------
*/
?>

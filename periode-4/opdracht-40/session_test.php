<?php

session_start();

$_SESSION['user'] = "Cassandra";

echo "Ingelogde gebruiker: " . $_SESSION['user'];

/*
----------------------------------------------
    DENKNAVRAGEN
----------------------------------------------

Waar wordt deze data opgeslagen?
    Op de server, in een tijdelijk bestand.
    De browser krijgt alleen een sessie-ID (cookie)
    om de juiste sessie te herkennen.

Blijft deze bestaan na refresh?
    Ja. Zolang de browser open is en de sessie
    niet verlopen is, blijft de data beschikbaar.
    Bij session_destroy() of het sluiten van de
    browser verdwijnt de sessie.
----------------------------------------------
*/
?>

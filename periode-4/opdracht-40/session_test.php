<?php

session_start();

$_SESSION['user'] = "Angelino";

echo "Ingelogde gebruiker: " . $_SESSION['user'];
?>

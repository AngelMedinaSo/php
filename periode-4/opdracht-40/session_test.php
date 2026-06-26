<?php

session_start();

$_SESSION['user'] = "Angelino";

echo "Ingelogde gebruiker: " . $_SESSION['user'];

// Session data is stored on the server. The browser only gets a session ID (cookie).
// The data stays after refresh. It disappears when you close the browser or call session_destroy().
?>

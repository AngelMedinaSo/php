<?php

session_start();

if (!isset($_SESSION['user'])) {
    echo "Niet ingelogd";
} else {
    echo "Welkom, " . $_SESSION['user'] . "!";
}

// isset() checks if the variable exists before using it. Without it PHP gives an error.
// If the session does not exist, isset() returns false and "Niet ingelogd" is shown.
?>

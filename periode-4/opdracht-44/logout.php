<?php

session_start();
session_destroy();

header("Location: nav.php");
exit;
?>

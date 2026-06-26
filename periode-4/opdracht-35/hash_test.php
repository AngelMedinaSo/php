<?php

$wachtwoord = "geheim123";

$hash = password_hash($wachtwoord, PASSWORD_DEFAULT);

echo "Origineel wachtwoord: " . $wachtwoord;
echo "<br>";
echo "Hash: " . $hash;

?>

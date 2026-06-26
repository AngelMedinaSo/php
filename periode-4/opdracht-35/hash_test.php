<?php

$wachtwoord = "geheim123";

$hash = password_hash($wachtwoord, PASSWORD_DEFAULT);

echo "Origineel wachtwoord: " . $wachtwoord;
echo "<br>";
echo "Hash: " . $hash;

// The hash looks different every time because password_hash() adds a random salt.
// This is good because two users with the same password will have different hashes.
?>

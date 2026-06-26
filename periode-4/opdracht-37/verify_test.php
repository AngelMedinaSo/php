<?php

$wachtwoord = "geheim123";
$hash       = password_hash($wachtwoord, PASSWORD_DEFAULT);

echo "Hash: " . $hash;
echo "<br><br>";

$test1 = "geheim123";

if (password_verify($test1, $hash)) {
    echo "Test 1 - Correct wachtwoord";
} else {
    echo "Test 1 - Onjuist wachtwoord";
}

echo "<br>";

$test2 = "verkeerd456";

if (password_verify($test2, $hash)) {
    echo "Test 2 - Correct wachtwoord";
} else {
    echo "Test 2 - Onjuist wachtwoord";
}

?>

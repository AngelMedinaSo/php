<?php
$ingelogd = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOI!!!</h1>
    <p>
        <?php
        if ($ingelogd === true) {
            echo "Welkom terug!";
        } else {
            echo "Log eerst in.";
        }
        ?>
    </p>
</body>
</html>
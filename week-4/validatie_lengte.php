<?php
$titel = "TI";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titel; ?></title>
</head>

<body>
    <h1>Titel is:<?php echo $titel; ?></h1>
    <p>Titel has <?php echo strlen($titel); ?> characters.</p>
    <?php
    if (empty($titel)) {
        echo "Titel is verplicht.";
    }elseif (strlen($titel) < 3) {
        echo "Titel moet minimaal 3 karakters hebben.";
    }elseif (strlen($titel) > 50) {
        echo "Titel mag maximaal 50 karakters hebben.";
    }else {
        echo "Titel is geldig.";
    }

    ?>

</body>

</html>
<?php

require "includes/db.php";
$appNaam = "Seriesly";
$trackerType = "seriesTracker";
$tagline = "Track ur favorite series and shows";

$item = $conn->prepare("select * from tabel");
$item->execute();
$items = $item->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seriesly</title>
</head>

<body>
    <h1>Hoi, welkom bij <?= $appNaam ?></h1>
    <P><?= $tagline ?> using the best <?= $trackerType ?> available!</P>

    <?php

    if (count($items) === 0) {
        echo "<p>Er zijn nog geen items toegevoegd.</p>";
    } else {
        echo "<ul>";
        foreach ($items as $item) {
            echo "<li>" . $item['titel'] . "</li>";
        }
        echo "</ul>";
    }

    include "pages/toevoegen.php";

    ?>
    

</body>

<footer>&#169; <?= date('Y'), " ", $appNaam ?></footer>

</html>
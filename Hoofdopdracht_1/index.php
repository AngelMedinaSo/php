<?php
    // Mijn mini-app wordt een: series die je kijkt tracker
    $appNaam = "Seriesly";
    $trackerType = "seriesTracker";
    $tagline = "Track ur favorite series and shows";
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
    <footer>&#169; <?= date('Y')," ", $appNaam ?></footer>
</body>
</html>
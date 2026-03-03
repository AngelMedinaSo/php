<?php

$games = [
[
"titel" => "The Last of Us II",
"Developer" => "Naughty Dog",
"genre" => "Action-Adventure"
],
[
"titel" => "Valorant",
"Developer" => "Riot",
"genre" => "First Person Shooter"
]
];

?>  

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 4</title>
</head>
<body>
    <h1><?= $games[0]["titel"]; ?></h1>
    <p>Developed by: <?= $games[0]["Developer"]," with a ", $games[0]["genre"] ?> genre</p>
    <h1><?= $games[1]["titel"]; ?></h1>
    <p>Developed by: <?= $games[1]["Developer"]," with a ", $games[1]["genre"] ?> genre</p>
</body>
</html>
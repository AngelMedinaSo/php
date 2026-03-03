<?php 
    include "../includes/header.php";
    include "../includes/nav.php";

$boeken = [
    [
        "titel" => "Fourth Wing",
        "auteur" => "Rebecca Yarros",
        "status" => "Bezig"
    ],
    [
        "titel" => "Circe",
        "auteur" => "Madeline Miller",
        "status" => "Gelezen"
    ]
];

 ?>

 <!-- Hier komt de inhoud van de pagina -->
  <h1><?= $boeken[0]["titel"]; ?></h1>
    <p>writen by: <?= $boeken[0]["auteur"]?></p>
    <p>status: <?= $boeken[0]["status"]?></p>
    <h1><?= $boeken[1]["titel"]; ?></h1>
    <p>writen by: <?= $boeken[1]["auteur"]?></p>
    <p>status: <?= $boeken[1]["status"]?></p>

 <?php include "../includes/footer.php"; ?>
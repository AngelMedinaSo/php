<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];

    // Remove espaços extras
    $nome = trim($nome);
    
    $nomeFormatado = ucwords(strtolower($nome));

    echo "Olá, " . $nomeFormatado . "!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<script src="script.js"></script>
</body>
</html>
<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 32</title>
</head>
<body>

    <h1>Wrong query</h1>
    <p>UPDATE items SET titel = 'Test'</p>
    <p>The WHERE is missing. This updates ALL records in the table.</p>

    <h1>Correct query</h1>
    <p>UPDATE items SET titel = 'Test' WHERE ID = 1</p>

</body>
</html>

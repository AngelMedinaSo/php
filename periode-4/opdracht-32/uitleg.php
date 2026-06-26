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
    <p>Now only the record with ID 1 is updated.</p>

    <h1>Why is it dangerous?</h1>
    <p>Without WHERE you overwrite all data at once. There is no warning and it cannot be undone without a backup.</p>

</body>
</html>

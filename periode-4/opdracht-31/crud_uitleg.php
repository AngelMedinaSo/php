<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Overview</title>
</head>
<body>

    <h1>CRUD Overview</h1>

    <h2>C - Create</h2>
    <p>Adding a new record to the database.</p>
    <p>SQL: INSERT INTO items (titel) VALUES (?)</p>

    <h2>R - Read</h2>
    <p>Getting data from the database.</p>
    <p>SQL: SELECT * FROM items</p>
    <p>Where: get_item.php, index.php</p>

    <h2>U - Update</h2>
    <p>Changing an existing record in the database.</p>
    <p>SQL: UPDATE items SET titel = ? WHERE id = ?</p>
    <p>Where: update_test.php</p>

    <h2>D - Delete</h2>
    <p>Removing a record from the database.</p>
    <p>SQL: DELETE FROM items WHERE id = ?</p>
    <p>Where: delete_test.php, delete.php</p>

</body>
</html>

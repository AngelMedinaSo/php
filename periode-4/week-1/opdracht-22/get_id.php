<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Get ID</title>
</head>
<body>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Geselecteerd item: " . htmlspecialchars($id);
} else {
    echo "Geen ID opgegeven in de URL.";
}
?>

</body>
</html>

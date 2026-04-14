<?php
$host = 'localhost';
$db = 'items';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('DB fout: ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titel = trim($_POST['titel'] ?? '');

    if ($titel !== '') {
        try {
            $sql = 'INSERT INTO items (titel) VALUES (:titel)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':titel' => $titel,
            ]);

            header('Location: refresh_test.php?saved=1');
            exit;
        } catch (PDOException $e) {
            echo 'Insert fout: ' . $e->getMessage();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refresh Test</title>
</head>
<body>
    <h1>Refresh Test</h1>

    <?php if (isset($_GET['saved'])): ?>
        <p>Item opgeslagen met redirect. F5 maakt nu geen extra insert.</p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="titel">Titel</label>
        <input type="text" id="titel" name="titel" required>
        <button type="submit">Opslaan</button>
    </form>

    <p>Je gebruikt nu redirect na opslaan (PRG).</p>
</body>
</html>
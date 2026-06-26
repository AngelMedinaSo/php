<?php
session_start();
$_SESSION['user'] = "Angelino"; //u can just comment this line out to test the login/logout but u have to be in diff sessions, so u can just open a new incognito window to test the login/logout
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Navigatie</title>
</head>
<body>

    <nav>
        <a href="#">Home</a> |

        <?php if (isset($_SESSION['user'])): ?>
            <a href="#">Nieuw item</a> |
            <a href="#">Logout</a>
        <?php else: ?>
            <a href="#">Login</a> |
            <a href="#">Register</a>
        <?php endif; ?>
    </nav>

    <hr>

    <?php if (isset($_SESSION['user'])): ?>
        <p>Ingelogd als: <?= $_SESSION['user'] ?></p>
    <?php else: ?>
        <p>Je bent niet ingelogd.</p>
    <?php endif; ?>

</body>
</html>


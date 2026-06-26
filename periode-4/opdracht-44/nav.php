<?php session_start(); ?>

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

<?php
// Hiding a button is not enough for security. Someone can still go to the URL manually.
// You also need to check on the page itself if the user is logged in.
?>

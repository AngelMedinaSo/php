<?php session_start(); ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Menu test</title>
</head>
<body>

    <nav>
        <a href="#">Home</a> |
        <a href="#">Over ons</a> |

        <?php if (isset($_SESSION['user'])): ?>
            <a href="#">Mijn profiel</a> |
            <a href="#">Uitloggen</a>
        <?php else: ?>
            <a href="#">Inloggen</a> |
            <a href="#">Registreren</a>
        <?php endif; ?>
    </nav>

    <hr>

    <?php if (isset($_SESSION['user'])): ?>
        <p>Ingelogd als: <?= $_SESSION['user'] ?></p>
    <?php else: ?>
        <p>Niet ingelogd</p>
    <?php endif; ?>

</body>
</html>

<?php
// A logged in user needs different options than a guest.
// A guest should only see Login and Register, not pages that require a login.
?>

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
/*
----------------------------------------------
    DENKNAVRAGEN
----------------------------------------------

Waarom mag een niet-ingelogde gebruiker geen "Nieuw item" zien?
    Omdat die pagina alleen voor ingelogde gebruikers
    is bedoeld. Je verbergt de knop zodat het duidelijk
    is wat de gebruiker kan doen.

Is alleen het verbergen van een knop genoeg voor veiligheid?
    Nee. Iemand kan gewoon handmatig naar de URL gaan.
    Je moet op de pagina zelf ook controleren of
    iemand ingelogd is, en anders terugsturen.
----------------------------------------------
*/
?>

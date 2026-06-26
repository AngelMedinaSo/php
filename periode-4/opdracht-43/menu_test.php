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
/*
----------------------------------------------
    DENKNAVRAGEN
----------------------------------------------

Waarom zou je menu-items aanpassen op basis van login?
    Een ingelogde gebruiker heeft andere opties nodig
    dan iemand die nog niet ingelogd is.
    Je toont alleen wat relevant is voor die persoon.

Wat moet een gebruiker zien als hij niet is ingelogd?
    Links naar de inlogpagina en registratiepagina.
    Geen links naar paginas die een login vereisen,
    zoals "Mijn profiel".
----------------------------------------------
*/
?>

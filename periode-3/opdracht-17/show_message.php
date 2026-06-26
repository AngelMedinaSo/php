<?php session_start(); ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Flash message</title>
</head>
<body>

    <?php if (isset($_SESSION['flash'])): ?>
        <p><?= $_SESSION['flash'] ?></p>
        <?php unset($_SESSION['flash']); ?>
    <?php else: ?>
        <p>Geen melding.</p>
    <?php endif; ?>

</body>
</html>

<?php
/*
----------------------------------------------
    DENKNAVRAGEN
----------------------------------------------

Waarom is het belangrijk dat een flash message niet
voor altijd zichtbaar blijft?
    Een flash message hoort maar één keer te verschijnen,
    bijvoorbeeld na het opslaan van een formulier.
    Als hij blijft staan, denkt de gebruiker steeds
    dat er iets is opgeslagen, terwijl dat niet zo is.
    unset() verwijdert de melding meteen na het tonen.
----------------------------------------------
*/
?>

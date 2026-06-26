<?php

session_start();

$_SESSION['kleur'] = 'lila';

echo "Mijn opgeslagen waarde is: " . $_SESSION['kleur'];

/*
----------------------------------------------
    DENKNAVRAGEN
----------------------------------------------

Waarom blijft de waarde "bestaan" terwijl je de pagina opnieuw laadt?
    PHP slaat de sessiedata op de server op.
    Bij elke refresh stuurt de browser zijn sessie-ID mee,
    zodat de server dezelfde data weer kan ophalen.

Waar leeft deze data: browser of server?
    Op de server. De browser bewaart alleen een kleine
    cookie met het sessie-ID, niet de data zelf.
----------------------------------------------
*/
?>

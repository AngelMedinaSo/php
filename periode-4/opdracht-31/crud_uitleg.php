<?php

/*
==============================================
    CRUD OVERZICHT - Waar gebeurt wat?
==============================================

CRUD staat voor: Create, Read, Update, Delete
Dit zijn de vier basisoperaties op een database.

----------------------------------------------
C - CREATE (Aanmaken)
----------------------------------------------
Wat doet het?
    Een nieuw record toevoegen aan de database.

SQL query:
    INSERT INTO items (titel, beschrijving) VALUES (?, ?)

Waar in mijn project?
    Dit gebeurt wanneer je een formulier invult en verstuurt
    om een nieuw item toe te voegen.

----------------------------------------------
R - READ (Lezen)
----------------------------------------------
Wat doet het?
    Data ophalen uit de database.

SQL query:
    SELECT * FROM items
    SELECT * FROM items WHERE id = ?

Waar in mijn project?
    opdracht-22/get_id.php      -> haalt een item op via GET
    opdracht-23/get_item.php    -> haalt een item op met PDO
    opdracht-29/index.php       -> haalt alle items op voor de lijst

----------------------------------------------
U - UPDATE (Aanpassen)
----------------------------------------------
Wat doet het?
    Een bestaand record aanpassen in de database.

SQL query:
    UPDATE items SET titel = ? WHERE id = ?

Waar in mijn project?
    opdracht-26/update_test.php -> past de titel aan van een item

----------------------------------------------
D - DELETE (Verwijderen)
----------------------------------------------
Wat doet het?
    Een record verwijderen uit de database.

SQL query:
    DELETE FROM items WHERE id = ?

Waar in mijn project?
    opdracht-28/delete_test.php -> verwijdert een item met testdata
    opdracht-29/delete.php      -> verwijdert een item via de delete knop

==============================================
    DENKNAOVRAGEN
==============================================

Waarom is het handig om deze onderdelen te herkennen?
    Als je weet welk onderdeel iets is, weet je meteen
    welke SQL query je nodig hebt en hoe het werkt.
    Het maakt code leesbaarder en makkelijker te begrijpen.

Werkt je applicatie nog als een van deze ontbreekt?
    Ja, de applicatie kan nog werken, maar dan mis je functionaliteit.
    Zonder DELETE kun je niks verwijderen.
    Zonder CREATE kun je geen nieuwe items toevoegen.
    Zonder READ zie je niks in de browser.
    Zonder UPDATE kun je bestaande data niet aanpassen.

==============================================
*/

echo "CRUD staat voor: Create, Read, Update, Delete.";
echo "<br>";
echo "Zie de comments in deze file voor de volledige uitleg.";
?>

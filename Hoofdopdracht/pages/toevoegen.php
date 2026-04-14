<h2>Nieuw item toevoegen</h2>

<form method="POST" action="pages/verwerk.php">
    <label for="titel">Titel:</label>
    <input type="text" name="titel" id="titel" required>

    <label for="categorie">Categorie:</label>
    <select id="categories" name="categorie" required>
        <option value="drama">Drama</option>
        <option value="comedy">Comedy</option>
        <option value="action">Action</option>
        <option value="sci-fi">Sci-Fi</option>
        <option value="romance">Romance</option>
        <option value="thriller">Thriller</option>
        <option value="fantasy">Fantasy</option>
    </select>

    <button type="submit" name="submit">Toevoegen</button>
</form>

<?php
if (empty($titel)) {
    echo "Titel is verplicht.";
} elseif (strlen($titel) < 3) {
    echo "Titel moet minimaal 3 karakters hebben.";
} elseif (strlen($titel) > 50) {
    echo "Titel mag maximaal 50 karakters hebben.";
} else {
    echo "Titel is geldig.";
}
?>
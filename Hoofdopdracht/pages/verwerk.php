<?php
$formulierVerzonden = isset($_POST['submit']);

$titel = $_POST['titel'] ?? '';
$categorie = $_POST['categorie'] ?? '';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Item ontvangen</title>
</head>
<body>
	<?php if ($formulierVerzonden): ?>
		<h1>Item succesvol ontvangen</h1>
		<p>Je gegevens zijn goed binnengekomen via POST.</p>

		<ul>
			<li>Titel: <?= htmlspecialchars($titel) ?></li>
			<li>Categorie: <?= htmlspecialchars($categorie) ?></li>
		</ul>
	<?php else: ?>
		<h1>Geen formulierdata ontvangen</h1>
	<?php endif; ?>

	<p><a href="../index.php">Terug naar homepage</a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>

<?php

		require_once("alxLib.php");

		echo getHead("Accueil");
?>

</head>
<body>
<header>
	<nav>
<?php
	echo getHeader();
?>

	<main>

	<h1>Voici un Titre</h1>
	<h2>Premier Titre de Paragraphe</h2>
		<p>Premier Paragrahe</p>
	<h2>Second Titre de Paragraphe</h2>
		<p>Second Paragraphe</p>
</main>

<?php
	echo getFooter();
?>

</body>
</html>


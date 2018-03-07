<!DOCTYPE html>
<html>
<head>

<?php

		require_once("StructLib.php");
		//require_once("FunctionLib.php");

		echo getHead("Accueil");

?>

</head>
<body>
	<div id="main">
<?php
	echo getHeader();
	//echo getMenuDéroulantContent();
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
</div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>

<?php
require_once("alxLib.php"); // obligatoire d'include le fichier de lib

echo getHead("Titre de Test");
?>

</head>
<body>

<?php

	echo getHeader();

?>

	<p> Voici un paragraphe </p>
<?php

	require_once("alxLib.php");

	echo getFooter();

?>

</body>
</html>

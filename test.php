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

<?php
	
	echo getListProducts();

?>


<?php

	include('footer.php');

	
?>

</body>
</html>

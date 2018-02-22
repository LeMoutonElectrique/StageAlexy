<!DOCTYPE html>
<html>
<head>

<?php
	
	
	
	
require_once("alxLib.php"); // obligatoire d'include le fichier de lib

echo getHead("Les Produits");


?>

</head>
<body>

<?php 
		echo getHeader();
		
?>

	<h1> Les Produits du moments</h1>

<main>

<?php 
		echo getListProducts();
		
?>

</main>


<?php
	echo getFooter();
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>

<?php
	
	
	
	
require_once("alxLib.php"); // obligatoire d'include le fichier de lib

//echo getHead("Les Produits");


?>

</head>
<body>

<?php 
		include ('header.php');
		
?>

	<h1> Les Produits du moments</h1>

<main>

<?php 
		include ('Array_produits.php');
		
?>

</main>


<?php
	include ("footer.php");
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>

<?php
	
	
	
require_once("FunctionLib.php");
require_once("StructLib.php");

echo getHead("Les Produits");


?>

</head>
<body>

<?php 
		echo getHeader();
		echo getMenuDéroulantContent();
		
?>

	

<main>

	<h1> Les Produits du moments</h1>

<?php 
		echo getListProducts();
		
?>

</main>


<?php
	echo getFooter();
?>

</body>
</html>
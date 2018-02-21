<!DOCTYPE html>
<html>
<head>

<?php
	
	$titlehead="Les Produits";
	include('head.php');

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
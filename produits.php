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
	<div id="main">
<?php 
		echo getHeader();
		
		
?>

	

<main>

	<h1> Les Produits du moments</h1>
	<br>
	<br>
	<br>



<?php 
		
		echo getListProductsInfos();
		
?>
<!--<div id="mise_en_page_articles">
		<article>
			<img src="images jeux/monsterhunterworld.jpg" class="images_produits">
			<h2>Nom du jeux</h2>
			<h3>Prix du jeu</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac tellus eu lacus fermentum aliquet sed eget lectus. <a href="#">Voir plus</a></p>-->
		
			
		</article>
		<hr>
		<br>
		
	</div>

	

</main>


<?php
	echo getFooter();
?>
</div>
</body>
</html>
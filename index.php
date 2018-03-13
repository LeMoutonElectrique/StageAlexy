<!DOCTYPE html>
<html>
<head>

<?php

		require_once("StructLib.php");
		require_once("FunctionLib.php");

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

	<h1>Accueil</h1>
	<br>
	<br>
	<br>
	<h1>L'actualité des jeux vidéos</h1>
	<br>
	<br>
	<br>

<?php
	echo getActualites();
	
?>


	<!--<div id="mise_en_page_articles">
		<article class="article_accueil">
			<img src="images jeux/monsterhunterworld.jpg">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac tellus eu lacus fermentum aliquet sed eget lectus. Nunc tincidunt condimentum nunc non aliquet. Praesent faucibus nisi a nisi tristique tristique. Fusce leo leo, malesuada vel fringilla ut, vulputate ac turpis. Curabitur ante velit, imperdiet vel ex vel, viverra consequat diam. Donec a elit id quam commodo imperdiet vel ultricies mi. Duis ac metus metus. Ut leo neque, commodo id pulvinar gravida, viverra consectetur mi.<a href="#">Voir plus</a></p>
		</article>
		<hr>
		<br>
		<article class="article_accueil">
			<img src="images jeux/monsterhunterworld.jpg">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac tellus eu lacus fermentum aliquet sed eget lectus. Nunc tincidunt condimentum nunc non aliquet. Praesent faucibus nisi a nisi tristique tristique. Fusce leo leo, malesuada vel fringilla ut, vulputate ac turpis. Curabitur ante velit, imperdiet vel ex vel, viverra consequat diam. Donec a elit id quam commodo imperdiet vel ultricies mi. Duis ac metus metus. Ut leo neque, commodo id pulvinar gravida, viverra consectetur mi.<a href="#">Voir plus</a></p>
		</article>
		<hr>
		<br>
		<article class="article_accueil">
			<img src="images jeux/monsterhunterworld.jpg">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac tellus eu lacus fermentum aliquet sed eget lectus. Nunc tincidunt condimentum nunc non aliquet. Praesent faucibus nisi a nisi tristique tristique. Fusce leo leo, malesuada vel fringilla ut, vulputate ac turpis. Curabitur ante velit, imperdiet vel ex vel, viverra consequat diam. Donec a elit id quam commodo imperdiet vel ultricies mi. Duis ac metus metus. Ut leo neque, commodo id pulvinar gravida, viverra consectetur mi.<a href="#">Voir plus</a></p>
		</article>
		<hr>
		<br>
		<article class="article_accueil">
			<img src="images jeux/monsterhunterworld.jpg">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac tellus eu lacus fermentum aliquet sed eget lectus. Nunc tincidunt condimentum nunc non aliquet. Praesent faucibus nisi a nisi tristique tristique. Fusce leo leo, malesuada vel fringilla ut, vulputate ac turpis. Curabitur ante velit, imperdiet vel ex vel, viverra consequat diam. Donec a elit id quam commodo imperdiet vel ultricies mi. Duis ac metus metus. Ut leo neque, commodo id pulvinar gravida, viverra consectetur mi.<a href="#">Voir plus</a></p>
		</article>
		<hr>
		<br>
		<article class="article_accueil">
			<img src="images jeux/monsterhunterworld.jpg">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac tellus eu lacus fermentum aliquet sed eget lectus. Nunc tincidunt condimentum nunc non aliquet. Praesent faucibus nisi a nisi tristique tristique. Fusce leo leo, malesuada vel fringilla ut, vulputate ac turpis. Curabitur ante velit, imperdiet vel ex vel, viverra consequat diam. Donec a elit id quam commodo imperdiet vel ultricies mi. Duis ac metus metus. Ut leo neque, commodo id pulvinar gravida, viverra consectetur mi.<a href="#">Voir plus</a></p>
		</article>
	</div>-->

</main>

<?php
	echo getFooter();
?>
</div>
</body>
</html>


<?php
	$Liste_Menu_Content = array("Mon Accueil","Nouveauté", "Nos Produits", "Contacts", "Panier");
	$Liste_Menu_Links = array("index.php","index.php","produits.php","index.php","index.php");
?>
<header>
		<nav>
<?php 
	for ($i=0; $i <count($Liste_Menu_Content) ; $i++) { 
		echo "<button>".$Liste_Menu_Content[$i]."</button>\n";
	}
?></nav>
	</header>
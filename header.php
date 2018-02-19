<?php
	$Liste_Menu = array("Mon Accueil","Nouveauté", "Nos Magasins", "Contacts", "Panier");
?>
<header>
		<nav>
<?php 
	for ($i=0; $i <count($Liste_Menu) ; $i++) { 
		echo "<button>".$Liste_Menu[$i]."</button>\n";
	}
?></nav>
	</header>
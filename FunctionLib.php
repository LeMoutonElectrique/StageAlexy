<?php
/**
	Liste des prosuits pour la page produits.php à inclure avec un getListProducts();
 */
function getListProducts(){

	$List_Products = array ("Shadox of the Colossus","Donkey-Kong Country:Tropical Freeze","Monster Hunter World","DragonBall Fighter Z","Bayonetta 2","God of War","Kirby: Star allies","Mario Kart 8 Deluxe","The Legend of Zelda:Breath of the Wild","Super Mario Odyssey","Dark Souls","Secret of Mana","Splatoon 2");

	$result="";

	echo "<ul>\n";

	for ($i=0; $i < count($List_Products); $i++) { 
		echo "<li>".$List_Products[$i]."</li>\n";
	};
	
	$result.= '</ul>'."\n";

	return $result;

}

function getMenuDéroulantContent(){

	$Menu_Deroulant_Content = array("PC","XBOX","SONY","RETRO");
	$Menu_Deroulant_Content_Links = array("http://localhost/StageAlexy/produits.php","http://localhost/StageAlexy/produits.php","http://localhost/StageAlexy/produits.php","http://localhost/StageAlexy/produits.php");
	$Menu_Deroulant_Content_Id = array("pc","xbox","sony","retro");

	$result="";
	echo "<div id=\"menu_deroulant\">\n";
	echo "<div id=\"menu_deroulant_content\">\n";

	for ($i=0; $i <count($Menu_Deroulant_Content) ; $i++) {
		
		echo "<a href=\"".$Menu_Deroulant_Content_Links[$i]."\" id=\"".$Menu_Deroulant_Content_Id[$i]."\">".$Menu_Deroulant_Content[$i]."</a>\n";
		
	};

	$result.= '</div>'."\n";
	$result.= '</div>'."\n";
	$result.= '</nav>'."\n";
	$result.= '</header>'."\n";
	return $result;

}

?>
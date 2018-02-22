<?php
/*
 * La Librairie de functions d'Alexy
 *
 * pour l'utiliser dans un fichier .php
 * simplement
 *  include("alxLib.php")
 *
 * puis appeler les functions
 *  getHead("mon titre");
 * 
 */

/**
 Fonction pour intégrer le head en pouvant choisir le titre avec un echo getHead();
 */
function getHead($titlehead){

	if (empty($titlehead)) {
		$titlehead = 'Vente de Jeux Videos en Ligne';
	}

    // la variable qui contiendra notre html
    $result="";
	
    // puis on y concaténe des chaines de caractéres
	$result .= '<title>'.$titlehead.'</title>'."\n";
	$result .= '<link rel="stylesheet" type="text/css" href="main.css">'."\n";
    $result .= '<script src="../js/jquery-3.3.1.min.js"></script>'."\n";

    // puis on renvoie ça à l'appelant

    return $result;
}



/**
	Fonction pour intégrer le footer automatiquement avec un echo getFooter();
 */
function getFooter(){

	$result="";

	$result .= '<footer>'."\n";
	$result .= '<h1> voici le footer de ma page </h1>'."\n";
	$result .= '</footer>'."\n";

	return $result;

}



/**
Fonction pour intégrer le header et la suite de bouton qui le compose avec un echo getHeader();
 */
function getHeader(){

	$Liste_Menu_Content = array("Mon Accueil","Nouveauté", "Nos Produits", "Contacts", "Panier");
	$Liste_Menu_Links = array("index.php","index.php","produits.php","index.php","index.php");

	$result="";

	$result .= '<header>'."\n";
	$result .=	'<nav>'."\n";
 
	for ($i=0; $i <count($Liste_Menu_Content) ; $i++) { 
		echo "<button>".$Liste_Menu_Content[$i]."</button>\n";
		}
	$result.='</nav>'."\n";
	$result.='</header>'."\n";

	return $result;
}



/**
	Liste des prosuits pour la page produits.php à inclure avec un getListProducts();
 */
function getListProducts(){

	$List_Products = array ("Shadox of the Colossus","Donkey-Kong Country:Tropical Freeze","Monster Hunter World","DragonBall Fighter Z","Bayonetta 2","God of War","Kirby: Star allies","Mario Kart 8 Deluxe","The Legend of Zelda:Breath of the Wild","Super Mario Odyssey","Dark Souls","Secret of Mana","Splatoon 2");

	$result="";

	$result.= '<ul>'."\n";

	for ($i=0; $i < count($List_Products); $i++) { 
		echo "<li>".$List_Products[$i]."</li>\n";
	};
	
	$result.= '</ul>'."\n";

	return $result;

}

?>

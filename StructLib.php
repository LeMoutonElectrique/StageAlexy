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
    $result .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>'."\n";

    // puis on renvoie ça à l'appelant

    return $result;
}

/**
Fonction pour intégrer le header et la suite de bouton qui le compose avec un echo getHeader();
 */
function getHeader(){

	$Liste_Menu_Content = array("Panier","Contacts"," Nos Produits", "Accueil");
	$Liste_Menu_Links = array("http://localhost/StageAlexy/index.php","http://localhost/StageAlexy/index.php","http://localhost/StageAlexy/produits.php","http://localhost/StageAlexy/index.php");
	$Liste_Menu_Id = array("panier","contacts","produits","accueil");

		echo "<header>\n";
		echo "<nav>\n";

	

	
 	

	for ($i=0; $i <count($Liste_Menu_Content) ; $i++) { 
		echo "<a href=\"".$Liste_Menu_Links[$i]."\"><button id=\"".$Liste_Menu_Id[$i]."\">".$Liste_Menu_Content[$i]."</button></a>\n";
		}
	
	
}


/**
	Fonction pour intégrer le footer automatiquement avec un echo getFooter();
 */
function getFooter(){

	$Column_List_Footer_Content = array("© 2018 VideoGames","Terms","Privacy","Security","Status","Help");
	$Column_List_Footer_Id = array("copyright","terms","privacy","security","status","help");

	$result="";

	echo "<footer>\n";
	echo "<table>\n";
	echo "<tr>\n";

		for ($l=0; $l < count($Column_List_Footer_Content) ; $l++) { 
			echo "<td id=\"".$Column_List_Footer_Id[$l]."\">".$Column_List_Footer_Content[$l]."</td>\n";
		}
	
	$result .= '</tr>'."\n";
	$result .= '</table>'."\n";
	$result .= '</footer>'."\n";

	return $result;

}


?>

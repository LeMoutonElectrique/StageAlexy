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
	$Liste_Menu_Links = array("#","#","produits.php","index.php");
	$Liste_Menu_Id = array("panier","contacts","produits","accueil");
	$Menu_Deroulant_Content = array("PC","XBOX","SONY","RETRO");
	$Menu_Deroulant_Content_Links = array("produits.php","produits.php","produits.php","produits.php");
	$Menu_Deroulant_Content_Id = array("pc","xbox","sony","retro");

	$result="";

		echo "<header>\n";
		echo "<nav>\n";
			echo '<div class="menu_deroulant">'."\n";
		
		for ($i=0; $i <2 ; $i++) {

			echo "<a href=\"".$Liste_Menu_Links[$i]."\"><button id=\"".$Liste_Menu_Id[$i]."\">".$Liste_Menu_Content[$i]."</button></a>\n";

		}

		
			echo "<a href=\"".$Liste_Menu_Links[2]."\"><button id=\"".$Liste_Menu_Id[2]."\">".$Liste_Menu_Content[2]."</button></a>\n";

			echo '<div class="menu_deroulant_content">'."\n";

				for ($i=0; $i <count($Menu_Deroulant_Content) ; $i++) {
		
					echo "<a href=\"".$Menu_Deroulant_Content_Links[$i]."\" id=\"".$Menu_Deroulant_Content_Id[$i]."\">".$Menu_Deroulant_Content[$i]."</a>\n";
		
				};

			echo '</div>'."\n";
		echo '</div>'."\n";

		echo '<div class="menu_deroulant">'."\n";

			echo "<a href=\"".$Liste_Menu_Links[3]."\"><button id=\"".$Liste_Menu_Id[3]."\">".$Liste_Menu_Content[3]."</button></a>\n";

		$result.= '</div>'."\n";
		$result.= '</nav>'."\n";
		$result.= '</header>'."\n";
		return $result;

}

		/*<div class="menu_deroulant">

      		<button class="menu_button">Catégories</button>

        	<div class="menu_deroulant_content">
        		<a href="#">Jeux</a>
        		<a href="#">Informatique</a>
        		<a href="#">Consoles</a>
        	</div>*/
 	

	
	
	


function getMenuDéroulantContent(){

	$Menu_Deroulant_Content = array("PC","XBOX","SONY","RETRO");
	$Menu_Deroulant_Content_Links = array("produits.php","produits.php","produits.php","produits.php");
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

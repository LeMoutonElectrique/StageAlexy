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


/*
La fonction qui permet de créer le tableau contenant les infos des jeux de la liste
*/

function getListProductsInfos(){

	@$json = file_get_contents("jeux.json");
	
	
	$listeJeux=json_decode($json, true);
		if ($listeJeux == NULL) {
        	echo ("Votre page ne peut pas être chargée, veuillez réessayer ultérieurement");   
        	exit();
    	}
 $i = 0;

 	
 	echo '<div id="mise_en_page_produits">'."\n";


	foreach ($listeJeux as $key => $value) {
		$jeux = $listeJeux[$key];
	
		echo "<article>"."\n";
		
		echo '<img src="images jeux/'.$jeux["image"].'" class="images_produits">'."\n";
		echo "<a href=\"PagesJeux.php?id=$i\" id=\"".$i."\" class=\"ahrefclass\"><h2>".$jeux["nom"]."</h2></a>"."\n";
		echo "<h3> Prix : ".$jeux["prix"]."€ </h3>"."\n";
		echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac tellus eu lacus fermentum aliquet sed eget lectus. <a href="#">Voir plus</a></p>'."\n";



		echo "</article>";
		echo "<br><hr><br>";


	$i = $i+1;
	
}
	
	//echo "</div>";


}


function getActualites(){

	
	@$json = file_get_contents("actualités.json");
	$ListeActualités = json_decode($json, true);
	//var_dump($ListeActualités);

	if ($ListeActualités == NULL) {
        	echo ("Votre page ne peut pas être chargée, veuillez réessayer ultérieurement");   
        	exit();
    	}

    	echo "<div id=\"mise_en_page_articles\">"."\n";
    foreach ($ListeActualités as $key => $value) {
    	$listeactualtés = $ListeActualités[$key];
   
    	
    	echo "<article class=\"article_accueil\">"."\n";	
    	echo '<img src="images articles/'.$listeactualtés["image"].'" class="images_actualités">'."\n";
    	echo "<h1>".$listeactualtés["titre"]."</h1>"."\n";
    	echo "<p>".$listeactualtés["actualité"]."<a href=\"#\">Voir + </a></p>"."\n";
    	echo "</article>"."\n";
    	echo "<br>"."\n"."<hr>"."\n"."<br>"."\n";
	}
		echo "</div>"."\n";
}

function getPageJeuxSettings(){
	$id = $_GET["id"];

	
	@$json = file_get_contents("jeux.json");
		$liste_jeux = json_decode($json, true);
	
		$nombre_jeux = count($liste_jeux);
		$liste_prix = array();
		$liste_nom = array();
		$liste_image = array();
		$liste_date = array();
		$liste_description = array();
		$liste_support = array();
		$supports =array();

	foreach ($liste_jeux as $key => $value){
		$jeux = $liste_jeux[$key];
		
		
		$liste_nom[$key] = $jeux["nom"];

		$liste_prix[$key] = $jeux["prix"];
		

		$liste_image[$key] = $jeux["image"];

		$liste_date[$key] = $jeux["date"];

		$liste_description[$key] = $jeux["description"];

		$liste_support[$key] = $jeux["support"];
			foreach ($liste_support as $supkey => $supvalue) {
				$supports[$supkey] = $supvalue;
			}

	}
}


function getPageJeuxContent(){
	echo "<h1 id=\"titre_page_jeux\">".$liste_nom[$id]."<h3>(sorti le ".$liste_date[$id]." )</h1><br><br>\n";
	echo "<img src=\"images jeux/".$liste_image[$id]."\" id=\"image_page_jeux\"><br><br>\n";
	echo "<h2 id=\"prix_page_jeux\"> Prix : ".$liste_prix[$id]."€</h2><br><br>\n";

	echo "<ul id=\"liste_supports_page_jeux\"><br><br>\n";
		foreach ($supports[$id] as $supportkey => $supportvalue) {
			echo "<li id=\"éléments_liste_supports\">".$supportvalue."</li><br>\n";
		}
	echo "</ul><br><br>\n";

	echo "<p id\"description_page_jeux\">".$liste_description[$id];

}


?>
	
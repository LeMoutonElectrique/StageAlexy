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
	$Images_jeux = array("\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"","\"images jeux/monsterhunterworld.jpg\"");
	
	$listeJeux=json_decode($json, true);
		if ($listeJeux == NULL) {
        	echo ("Votre page ne peut pas être chargée, veuillez réessayer ultérieurement");   
        	exit();
    	}
 $i = 0;

 	
 	echo '<div id="mise_en_page_articles">'."\n";


foreach ($listeJeux as $key => $value) {
	$listejeux = $listeJeux[$key];
	
	echo "<article>"."\n";
	
	echo '<img src='.$Images_jeux[$i].' class="images_produits">'."\n";
	echo "<h2>".$listejeux["nom"]."</h2>"."\n";
	echo "<h3> Prix : ".$listejeux["prix"]."€ </h3>"."\n";
	echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac tellus eu lacus fermentum aliquet sed eget lectus. <a href="#">Voir plus</a></p>'."\n";



	echo "</article>";
	echo "<br><hr><br>";


	$i = $i+1;
	
}
	
	echo "</div>";


}
/*
Je garde ce qui est en commentaire en dessous pour une future fonction dont je me servirai pour introduire la date et les supports sur la page du jeu lui-même pour ne pas surcharger ce qu'il y a sur la page des produits qui sera déjà bien chargée
*/

	/*echo "	Le jeu est paru le : ".$listejeux["date"]."<br>";
		
		$supports = $listejeux["support"];

			echo "Ce jeu fonctionne sur ";
				foreach ($supports as $key => $value) {
			echo "	- ".$value."\n"."<br>";
				}
			echo "<br><hr><br>";*/
?>
	
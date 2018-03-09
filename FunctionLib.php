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

foreach ($listeJeux as $key => $value) {

	$listejeux = $listeJeux[$key];
	echo "	Le nom du jeu est : ".$listejeux["nom"]."\n"."<br>";
	echo "	Ce jeu coûte : ".$listejeux["prix"]."\n"."<br>";
	echo "	Le jeu est paru le : ".$listejeux["date"]."\n"."<br>";
		
		$supports = $listejeux["support"];

			echo "Ce jeu fonctionne sur ";
				foreach ($supports as $key => $value) {
			echo "	- ".$value."\n"."<br>";
				}
			echo "<br><hr><br>";


		/*if ($value = "support") {
			 echo "supports: ";
        foreach( $value as $support){
            echo "$support ";
		}

 		 continue;
 		}
      
    }*/

	//$Listejeux = array();
	$i = $i+1;
	//$Listejeux[$i] = $key;
	
	//echo $key["nom"]."\n";
}



}

?>
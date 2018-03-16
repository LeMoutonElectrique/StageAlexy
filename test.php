
<?php


require_once("StructLib.php");
require_once("FunctionLib.php");

$test = $_GET["id"];

	
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

echo getHead($liste_nom[$id]);

?>



<?php
		
	





	

	


	echo "<h1 id=\"titre_page_jeux\">".$liste_nom[$id]."<h3>(sorti le ".$liste_date[$id]." )</h1><br><br>\n";
	echo "<img src=\"images jeux/".$liste_image[$id]."\" id=\"image_page_jeux\"><br><br>\n";
	echo "<h2 id=\"prix_page_jeux\">".$liste_prix[$id]."</h2><br><br>\n";

	echo "<ul id=\"liste_supports_page_jeux\"><br><br>\n";
		foreach ($supports[$id] as $supportkey => $supportvalue) {
			echo "<li id=\"éléments_liste_supports\">".$supportvalue."</li><br>\n";
		}
	echo "</ul><br><br>\n";

	echo "<p id\"description_page_jeux\">".$liste_description[$id];

?>


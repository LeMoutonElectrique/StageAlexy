
<?php
require_once("StructLib.php");
require_once("FunctionLib.php");

echo getHead("Titre de Test");
?>

<?php
	
	
	
?>

<?php
	
	//echo getListProductsInfos();
	
@$json = file_get_contents("jeux.json");
	$liste_jeux = json_decode($json, true);
	
	$nombre_jeux = count($liste_jeux);
	$liste_prix = array();
	$liste_nom = array();
	$liste_image = array();
	$liste_date = array();
	$liste_support = array();
	$suports =array();
	//echo $nombre_jeux."<br><br><br><br><br>";

	foreach ($liste_jeux as $key => $value){
		$jeux = $liste_jeux[$key];
		
		
		$liste_nom[$key] = $jeux["nom"];

		$liste_prix[$key] = $jeux["prix"];
		//var_dump($liste_prix);

		$liste_image[$key] = $jeux["image"];

		$liste_date[$key] = $jeux["date"];

		$liste_support[$key] = $jeux["support"];
			foreach ($liste_support as $supkey => $supvalue) {
				$supports[$supkey] = $supvalue;
			}

		//echo $key."		=>		".$liste_nom[$key]."	=>		".$liste_prix[$key]/*."	=>		".$supports*/."\n<br>";
		

	}

$i  = 12;
//for ($i=0; $i < $nombre_jeux ; $i++) { 
	echo "<h1 class=\"pagejeux\" id=\"".$i."\">".$liste_nom[$i]."</h1>"."\n<br><br><br>";
	echo "<img src=\"images jeux/".$liste_image[$i]."\">";
	echo "";
//}




	//var_dump($liste_support);

	

//var_dump(expression)

	//var_dump($ListeActualités);
	
	/*$listeJeux=json_decode($json, true);
		if ($listeJeux == NULL) {
        	echo ("Votre page ne peut pas être chargée, veuillez réessayer ultérieurement");   
        	exit();
        }
	var_dump($listeJeux);*/
	$test = $_POST['clicked'];
	echo $test;

?>


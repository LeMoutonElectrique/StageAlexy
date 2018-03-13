<?php

$supports_brut  = $_GET["support_jeu"];
$supports = explode(",", $supports_brut);

$nouveau_jeu = array(
	"nom" => $_GET["nom_jeu"],
	"prix" => $_GET["prix_jeu"],
	"image" => "bayonetta2.jpg",
	"date" => $_GET["date_jeu"],
	"supports" => $supports);

@$json = file_get_contents("jeux.json");
$listeJeux=json_decode($json, true);


foreach ($nouveau_jeu as $key => $value) {
	
	if($value == NULL){
		echo "VOUS DEVEZ REMPLIR TOUS LES CHAMPS POUR VALIDER ! RETOUNEZ A LA PAGE PRECEDENTE POUR TERMINER DE REMPLIR LE FORMULAIRE !";
		exit();
	}
}

foreach ($listeJeux as $key => $value) {
	if(in_array($_GET['nom_jeu'], $value)){
		echo "CE JEU EXISTE DEJA !";
		exit();
	}
}


array_push($listeJeux, $nouveau_jeu);


$nouvelle_liste_jeux = json_encode($listeJeux, JSON_PRETTY_PRINT);
echo $nouvelle_liste_jeux;

file_put_contents("jeux.json", $nouvelle_liste_jeux);
//var_dump($listeJeux);

	
?>
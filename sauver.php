<?php

$supports_brut  = $_GET["support_jeu"];
$supports = explode(",", $supports_brut);

$nouveau_jeu = array(
	"nom" => $_GET["nom_jeu"],
	"prix" => $_GET["prix_jeu"],
	"image" => "pasdimage.jpg",
	"date" => $_GET["date_jeu"],
	"support" => $supports,
	"description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lectus quam, imperdiet in molestie in, viverra eu nisi. Integer ac velit non elit congue pretium. Donec vestibulum nisi eget sapien aliquet pretium ut a nisl. Morbi eget magna venenatis, pharetra sapien sed, venenatis leo. In volutpat justo quis ipsum convallis commodo. Fusce condimentum nibh et ligula sodales elementum in vel turpis. Suspendisse potenti. Proin vel ullamcorper nibh, pretium maximus est.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ac ipsum nec enim varius placerat. In tempor lacus odio, ut egestas nisi ultricies id. Nullam rutrum condimentum justo. Duis et ligula ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque quis sagittis ligula, at aliquam turpis. Etiam ac porta tellus. Nunc purus velit, consequat vitae nisl volutpat, accumsan ultrices neque. Nullam ac eros sit amet eros pulvinar condimentum. Suspendisse faucibus, odio eget rhoncus lacinia, ante risus imperdiet urna, et iaculis magna elit vel turpis.Duis non rhoncus purus. Donec semper nisi ac tristique egestas. Quisque et erat sed risus dapibus accumsan. Suspendisse commodo accumsan dolor. Duis quis vulputate tellus, vitae vulputate nulla. Class aptent taciti sociosqu ad litora torquent per."
);

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
//echo $nouvelle_liste_jeux;

file_put_contents("jeux.json", $nouvelle_liste_jeux);
//var_dump($listeJeux);

echo "<h2 align=\"center\">Votre jeu a bien été rajouté à la liste</h2>"."\n";
echo "<a href=\"produits.php\"><button align=\"center\">Retourner aux produits</button></a>"."\n";


	
?>
<?php 
$Accueil = "Mon Accueil";
$Liste_Menu = array("Mon Accueil","Nouveautés", "Nos Magasins", "Contacts", "Panier");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Test Stage</title>
	<link rel="stylesheet" type="text/css" href="testcss.css">
</head>
<body>
	<header>

<?php 
	for ($i=0; $i <count($Liste_Menu) ; $i++) { 
		echo "<button>".$Liste_Menu[$i]."</button>";
	}
?>
	</header>
	<h1>Voici un Titre</h1>
	<h2>Premier Titre de Paragraphe</h2>
		<p>Premier Paragrahe</p>
	<h2>Second Titre de Paragraphe</h2>
		<p>Second Paragraphe</p>
</body>
</html>


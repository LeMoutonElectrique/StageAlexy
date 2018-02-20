<?php

// la variable $titlehead doit être affectée avant de include("head.php");
// voir  dans test.php
	echo "<title>".$titlehead."</title>\n";
	print '<link rel="stylesheet" type="text/css" href="../main.css">';
    print '<script src="../js/jquery-3.3.1.min.js"></script>';
?>


<!--
ce serait intéressant d'utiliser le javascript 
___APRES__ avoir inclus la librairie jquery.

autrement, ça ne marche pas.
-->

<!--
rhi: je met en commentaire
<script type="text/javascript">
    // !!! ici, ta var title n'est jamais affectée. 
	var title ;
    // elle donc est vide quand tu l'utilises!!!
	$('#headtitle') == title;
	alert(title);
</script>
-->

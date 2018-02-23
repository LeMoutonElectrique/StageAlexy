<?php


/*
 * On va voir ce que c'est qu'un tableau ainsi qu'un tableau associatif, et comment les afficher
 */


// un tableau simple:
//
$tableau_simple = array("pif", "paf", "pouf");

// pour voir à quoi il ressemble en interne de php
echo "\n---------- tableau en intern -----------\n";
var_dump($tableau_simple);

// pour accéder à l'un de ses éléments:
echo "\n---------- élément simple -----------\n";
echo $tableau_simple[0]."\n";

// pour le parcourir en entier:
echo "\n---------- parcourt simple -----------\n";
foreach( $tableau_simple as $element ){
    echo " - $element \n";
}



// Un tableau associatif:
// les index sont des chainnes de caractére
$tableau_associatif = array(
    "fruit" => "banane",
    "couvert" => "fourchette",
    "menu" => "paella royale"
);


// pour accéder à l'un des éléments:
echo "\n---------- élement assoc -----------\n";
echo $tableau_associatif["fruit"]."\n";

// pour parcourir tout le tablaeu:
echo "\n---------- parcourt assoc -----------\n";
foreach( $tableau_associatif as $key=>$value){
    echo "$key: $value\n";
}



?>

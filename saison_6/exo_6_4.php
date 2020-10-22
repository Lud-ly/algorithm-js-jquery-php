<?php

$sMessage = "";
	// Tableau Nb(5) en Entier
	//Variable i en Entier
    $nb=array();
	//if ((isset($_POST["div_resultat_js"])) && (!(empty($_POST["div_resultat_js"]))))
	//{
	// Début
	// Pour i ← 0 à 5
	for($i=0;$i <= 5;$i++) {
		//Nb(i) ← i * i
	   $nb = $i * $i;
	// array_push($nb,$i);
    }
    $sMessage = "php " . $nb;
//}
	
	require "exo_6_4.html";

?>

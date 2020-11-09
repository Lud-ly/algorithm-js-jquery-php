<?php

$sMessage = "";
	// Tableau iTabNb(5) en Entier
	$iTabNb= [];
	//Variable i en Entier
	// if ((isset($_POST["div_resultat_php"])))
	// {
	// Début
	// Pour i ← 0 à 5
	for($i = 0; $i <= 5; $i++) {
		//iTabNb(i) ← i * i
		$iTabNb = (int)$iTabNb . $i * $i;
    }
    $sMessage = "php : " . 0 . (int)$iTabNb ;
//}
	
	require "exo_6_4.html";
 
?>

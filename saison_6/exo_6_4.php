<?php

$sMessage = "";
// Tableau iTabNb(5) en Entier
$iTabNb=[];
//Variable iNb ,i en Entier
// SI $_POST["myPhp"] EXISTE ET QUE $_POST["myPhp"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && ((empty($_POST["myPhp"]))))
{

	// Début
	// Pour i ← 0 à 5
	for($i = 0; $i <= 5; $i++) {
		//iTabNb(i) ← i * i
		$iTabNb[$i] = $i * $i ;
	}
	//Ecrire le Tableau
	$sMessage .= "php : " . implode("," ,$iTabNb);
	
}
	
require "exo_6_4.html";
 
?>

<?php

$sMessage="";
	//Tableau stuff[6] en Numérique
	//Variable i en Numérique
	//Debut
	//Pour i ← 0 à 6
	for ($i = 0; $i <= 7; $i++) {
		//stuff(i) ← 0
		$stuff = $stuff . "[ " . 0 . " ]";
		
	} 
	$sMessage= "PHP" . $stuff;
//Fin

$sMessage2="";
$sAphbLatin = ("A". "E" ."i". "O" . "U" . "Y");

	for ($i = 0; $i <= 5; $i++) {
		//stuff(i) ← 0
		$voyelles = $voyelles . "[ " . 	$sAphbLatin[$i] . " ]";
		
	} 
	$sMessage2= " PHP " . $voyelles;
//Fin
	

	
	require "exo_1.html";

?>

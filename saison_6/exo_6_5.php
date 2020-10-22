<?php

$sMessage = "";
$sMessage2 = "";
	// Tableau tab(6) en Numérique
	//Variables i, k en Numérique
	
	$tab=array();
	//Début
	//tab(0) ← 1
	$tab[0] = 1;
	//Ecrire tab(0)
	//$sMessage  = $tab[0];
	//Pour k ← 1 à 6
	for ($k = 1; $k <= 6; $k++) {
		//tab(k) ← tab(k-1) + 2
		$tab[$k] = $tab[$k - 1] + 2;
		// Ecrire tab(k)
	   $sMessage2 = "PHP " . $tab[$k];
	}
   
	for ($i = 1; $i <= 6; $i++) {
		//tab(i) ← tab(i-1) + 2
	   $tab[$i] = $tab[$i - 1] + 2;
		// Ecrire tab(k)
		$sMessage  = "PHP" . $tab[$i];
	}
	
	
	
	require "exo_6_5.html";

?>

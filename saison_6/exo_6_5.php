<?php

$sMessage = "";
$sMessage2 = "";
$sMessage3 = "";
	// Tableau tab(6) en Numérique
	//Variables i, k en Numérique
// 	if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
// {
	$tab=array(6);
	//Début
	//tab(0) ← 1
	$tab[0] = 1;
	$chain = "";
	//Ecrire tab(0)
	//Pour k ← 1 à 6
	for ($k = 1; $k < 7; $k++) {
		//tab(k) ← tab(k-1) + 2
		$tab[$k] =  $tab[$k - 1] + 2;
		// Ecrire tab(k)
	  // $sMessage = "PHP " . (int)$tab[$k];
	}
	
	for ($i = 1; $i < 7; $i++) {
		//tab(i) ← tab(i-1) + 2
	   $tab[$i] =  $tab[$i - 1] + 2;
	   $chain = $chain . " ," .  $tab[$i];
		// Ecrire tab(k)
		//$sMessage2  = "PHP" . (int)$tab[$i];
	}

	$sMessage3 = "PHP : " . $tab[0] . $chain ; 
// }
	
	require "exo_6_5.html";

?>

<?php

$sMessage= "";


	//Variable Tableau twoDim(5, 12) en Entier
	$twoDim = [[], []];

	//Debut
	//Pour i ← 0 à 5
	for ($i = 0; $i <= 12; $i++) {
		//$twoDim[$i] = 1;
		$twoDim[$i] = Array(6);
		for ($j = 0; $j <= 5; $j++) {
			// Pour j ← 0 à 12
			$twoDim[$i][$j] = 0;
			// twoDim(i, j) ← 0
		}// j Suivant

	} // i Suivant
	
	$sMessage= (implode("," ,$twoDim[0]));
// Fin
	
	require "exo_8_1.html";

?>

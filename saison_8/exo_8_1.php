<?php

$sMessage= "";

$i=0;
$j=0;
	//Variable Tableau twoDim(5, 12) en Entier
	$twoDim =array(
		array(6),
		array(12)
	);
//Debut
	//Pour i ← 0 à 5
	for ($i = 0; $i<5; $i++) {
		//array_pad($twoDim, 6, '');
			for ($j = 0; $j<12; $j++) {
			
				// Pour j ← 0 à 12
				//$twoDim[$i] = 0;
				$twoDim[$i][$j] = 0;
				
				
			}// j Suivant	
	} // i Suivant
	
	var_dump($twoDim);
	$sMessage=(explode(",",$twoDim[0],$twoDim[1],));
	
// Fin
	
	require "exo_8_1.html";

?>

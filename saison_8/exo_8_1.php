<?php

$sMessage= "";

$i=0;
$j=0;
	//Variable Tableau twoDim(5, 12) en Entier
	$twoDim =array(
		array(),
		array()
	);
//Debut
	//Pour i ← 0 à 5
	for ($i = 0; $i<=5; $i++) {
		

		if($i==5){
			for ($j = 0; $j<=12; $j++) {
			
				// Pour j ← 0 à 12
				//$twoDim[$i] = 0;
				$twoDim[$i][$j] = 0;
				
				
			}// j Suivant
		}	
	} // i Suivant
	
	$sMessage= ($twoDim[0]);
	
// Fin
	
	require "exo_8_1.html";

?>

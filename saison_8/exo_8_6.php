<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";
	// Variables i, j, iMax, jMax en Numérique
	// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"]  EST  VIDE ALORS
if ((isset($_POST["myVal"])) && ((empty($_POST["myVal"]))))
{
	$i;
	$j;
	$iMax;
	$jMax;
	$T = 
	[
		[14,30,16,22,35,29,21,30,24,25,15,2],
		[27,38,15,23,18,28,17,36]
	];
	$sMessage = ("Tableau 2dim: " . "[[" . implode("," ,$T[0]) . "],[" . implode("," ,$T[1]) . "]]");
	// Tableau T(12, 8) en Numérique
	// Debut
		// iMax ← 0
		// jMax ← 0
		$iMax = 0;
		$jMax = 0;
		// Pour i ← 0 à 12
		for ($i = 0; $i < count($T); $i++) {
		// Pour j ← 0 à 8
		for ($j = 0; $j < count($T[1]); $j++) {
			// Si T(i, j) > T(iMax, jMax) Alors
			if ($T[$i][$j] > $T[$iMax][$jMax]) {
					// iMax ← i
					// jMax ← j
				$iMax = $i;
				$jMax = $j;
				} // FinSi
			}// j Suivant
		}// i Suivant   

		// Ecrire "Le plus grand élément est ", T(iMax, jMax)
		// Ecrire "Il se trouve aux indices ", iMax, "; ", jMax
		$sMessage2 =("Le plus grand élément est " . $T[$iMax][$jMax]);
		$sMessage3 =("Il se trouve dans le tableau " . ($iMax+1) . " position " . ($jMax+1));
}   // Fin
	
	require "exo_8_6.html";

?>

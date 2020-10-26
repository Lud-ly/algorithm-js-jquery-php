<?php
$sMessage ="";
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
	// if ((isset($_POST["div_resultat_js"])) && ((empty($_POST["div_resultat_js"]))))
	// {
	//Variables i, j, N1, N2, schtroumpf en Numérique
	//Tableaux T1(), T2() en Numérique
	$schtroumpf = 0;
	$t1 = [4, 8, 7, 12];
	$t2 = [3, 6];
	//Debut
	//S ← 0
	//Pour i ← 0 à longueur de t1
	for ($i = 0; $i < count($t1); $i++) {
		//Pour j ← 0 à longueur de t2
		for ($j = 0; $j < count($t2); $j++) {
			//schtroumpf ← schtroumpf + T1(i) * T2(j)
			$schtroumpf += $t1[$i] * $t2[$j];
			//j Suivant
			// i Suivant

		}
	}
	// Ecrire "Le schtroumpf est : ", S
$sMessage = "PHP Le schtroumpf est de : " .  $schtroumpf;
// }//Fin
	
	require "exo_6_11.html";

?>

<?php
$sMessage ="";
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && ((empty($_POST["myPhp"]))))
{
	//Variables i, j, N1, N2, Toon en Numérique
	//Tableaux T1[], T2[] en Numérique
	$t1 = [4, 8, 7, 12];
	$t2 = [3, 6];
	//S ← 0
	$Toon = 0;
	//Debut
	//Pour i ← 0 à longueur de t1
	for ($i = 0; $i < count($t1); $i++) {
		//Pour j ← 0 à longueur de t2
		for ($j = 0; $j < count($t2); $j++) {
			//Toon ← schtroumpf + T1(i) * T2(j)
			$Toon += $t1[$i] * $t2[$j];
		}//j Suivant
	}// i Suivant
	// Ecrire "Le Toon est : ", Toon
	$sMessage = "PHP Le Toon est de : " .  $Toon;
}//Fin
	
	require "exo_6_11.html";

?>

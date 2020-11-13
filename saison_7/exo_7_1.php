<?php
$sMessage= "";
$sMessage2= "";
 //Variables Tableau en Numérique
//Variables Nb, en Entier
//Variable Flag en Booleen

$T = [];
$nb = 0;
$Flag = false;

            //Début
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
{
	
	//Ajouter value à notes
	$T = explode(" " ,$_POST["myPhp"]);
	//Si longueur Tab >=1 ET <=5 alors
	if (count($T) >= 1 && count($T) <= 5) {
		//Ecrire tab Notes
		$sMessage = implode("," ,$T);
	}//FinSi
	//Flag ← Vrai
	$Flag = true;
	//Pour i ← 1 à longueur Tab
	for ($i = 1; $i < count($T); $i++) {
		// Si T(i) <> T(i – 1) + 1 Alors
		if ($T[$i] < $T[$i - 1] + 1) {
			// Flag ← Faux
			$Flag = false;
			// FinSi

		}
		// Si Flag Alors
		if ($Flag) {
			//Ecrire "Les nombres sont consécutifs"
			$sMessage2 = ("PHP Les nombres sont consécutifs");

		}//FinSi
		// Sinon
		else {
			//Ecrire "Les nombres ne sont pas consécutifs"
			$sMessage2 = (" Les nombres ne sont pas tous consécutifs");
		}
	}//i Suivant
}//Fin
	
	require "exo_7_1.html";

?>

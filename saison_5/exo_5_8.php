<?php
	
$sMessage= "";
$sMessage2= "";
$sMessage3= "";
$sMessage4= "";

// SI $_POST["myPhp"] EXISTE ET QUE $_POST["myPhp"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
{
	//Variables iNombre, i, iNombrePGrand, position en Numerique 
	//Variables Tableau(20) en numérique
	//Debut
	//position ← 0 
	$iNombre;
	$i = 0;
	$iNombrePGrand = 0;
	$position = 0;
	$iTab = array(10);
		
	$iTab = explode(" " ,$_POST["myPhp"]);
		
	for ($i = 0; $i < count($iTab); $i++) {
		//  Ecrire "Entrez un nombre :
		// Lire iNombre 
		//Si i = 1 ou iNombre > iNombrePGrand Alors 
		if ($i == 1 || $iTab[$i] > $iNombrePGrand) {
			//iNombrePGrand=iNombre
			$iNombrePGrand = $iTab[$i];
			//  position ← i 

			$position = $i;
		}// FinSi 
	}//i Suivant
	//  Ecrire "Le nombre le plus grand était : ", iNombrePGrand
	$sMessage2 = ("PHP Le nombre le plus grand était : " . $iNombrePGrand);
	// Ecrire "Il a été saisi en position numéro ", position 
	$sMessage3 = ("Il a été saisi en position numéro " . ($position + 1));
	$sMessage4 = implode("," ,$iTab);
}// Fin

	require "exo_5_8.html";

?>


	
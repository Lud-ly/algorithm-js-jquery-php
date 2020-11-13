<?php
	
	$sMessage= "";
	$sMessage2= "";
	$sMessage3= "";

		// SI $_POST["iRepUtilisateur"] EXISTE ET QUE $_POST["iRepUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iNombreUtilisateur1"])) && (!(empty($_POST["iNombreUtilisateur1"]))))
{
	//Variables iNombre, i, iNombrePGrand, position en Numerique 
	//Variables chain en caractere
		$iNombre;
	$i = 0;
	$iNombrePGrand = 0;
	$position = 0;
	//Debut
	//position ← 0 
	$chain = "";
	// Pour i ← 1 à 20 
	$iNombre1 =  $_POST["iNombreUtilisateur1"];
	$iNombre2 =$_POST["iNombreUtilisateur2"];
	$iNombre3 = $_POST["iNombreUtilisateur3"];
	$iNombre4 = $_POST["iNombreUtilisateur4"];
	$iNombre5 = $_POST["iNombreUtilisateur5"];
	$chain = $chain . " " . $iNombre1 ." " . $iNombre2. " ".$iNombre3. " " . $iNombre4. " " . $iNombre5;
	// console.log(chain);
	for ($i = 1; $i <= strlen($chain); $i++) {
		//  Ecrire "Entrez un nombre :
		// Lire iNombre 
		
		//Si i = 1 ou iNombre > iNombrePGrand Alors 
		if ($chain[$i] > $iNombrePGrand) {
			//iNombrePGrand=iNombre
			$iNombrePGrand = $chain[$i];
			//  position ← i 
			
			$position = $chain[$i];
		}// FinSi 

	}//Fin
	//  Ecrire "Le nombre le plus grand était : ", iNombrePGrand
	// Ecrire "Il a été saisi en position numéro ", position 
	$sMessage= "Le nombre le plus grand était : " . $iNombrePGrand;
	$sMessage2= "Il a été saisi en position numéro " . $position;
	$sMessage3= "chaine" . $chain;

	
	
}// Fin

	require "exo_5_8.html";

?>


	
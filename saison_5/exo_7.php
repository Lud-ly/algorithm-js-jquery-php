<?php

$sMessage= "";

		// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
{
	//Variables iNombre, i, iFacto en Entier

	// Debut
	//Ecrire "Entrez un nombre : "
	//Lire iFacto
	$iNombre = $_POST["iNombreUtilisateur"];
	//Somme = 0
	$iFacto = 1;
	//Pour i = 2 à iNombre
	for ($i = 2; $i <= $iNombre; $i++) {
		// iFacto ← iFacto + i
		$iFacto = $iFacto * $i;
	}//fin pour
	//  Ecrire "La factorielle est de: ",iNombre,"est:", iFacto
	$sMessage = "PHP La factorielle de ". $iNombre . " est : " .  $iFacto;
}//fin
	
	require "exo_7.html";

?>

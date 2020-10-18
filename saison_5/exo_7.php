<?php

$sMessage= "";

		// SI $_POST["iRepUtilisateur"] EXISTE ET QUE $_POST["iRepUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
{
	//Variables iNombre, i, Somme en Entier

	// Debut
	//Ecrire "Entrez un nombre : "
	//Lire iFacto
	$iNombre = $_POST["iNombreUtilisateur"];
	//Somme = 0
	$iFacto = 1;
	//Pour i = 2 à iNombre
	for ($i = 2; $i <= $iNombre; $i++) {
		// iSomme ← iSomme + i
		$iFacto = $iFacto * $i;
	}//fin pour
	//  Ecrire "La factorielle est : ", Facto
	$sMessage = "PHP La factorielle de ". $iNombre . " est : " .  $iFacto;
}//fin
	
	require "exo_7.html";

?>

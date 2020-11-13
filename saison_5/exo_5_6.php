<?php
	
	$sMessage= "";

	// SI $_POST["iRepUtilisateur"] EXISTE ET QUE $_POST["iRepUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
{
		//Variables iNombre, i, Somme en Entier
		
		// Debut
		//Ecrire "Entrez un nombre : "
		//Lire iNombre
		$iNombre = $_POST["iNombreUtilisateur"];
		//Somme = 0
		$iSomme = 0;
		//Pour i = 1 à iNombre
		for ($i = 0; $i <= $iNombre; $i++) {
			// iSomme ← iSomme + i
			$iSomme = $iSomme + $i;
		}//fin pour
		//Ecrire "La somme est : ", Somme
		$sMessage  = ("PHP La somme est : " . $iSomme);
}//fin

	require "exo_5_6.html";

?>

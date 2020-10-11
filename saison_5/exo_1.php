<?php

	$sMessage= "";
	
	// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
	if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
	{
		// VARIABLE iNombreUtilisateur en NUMERIQUE
		// Inutile
		$iNombreEsssai= $_POST["iNombreEsssai"];
		$iNombreEsssai++;
		
		// ECRIRE "Entrez un nombre entre 1 et 3"
		// LIRE iNombreUtilisateur
		$iNombreUtilisateur= $_POST["iNombreUtilisateur"];
		
		// SI ((iNombreUtilisateur < 1) || (iNombreUtilisateur > 3)) ALORS
		if (($iNombreUtilisateur < 1) || ($iNombreUtilisateur > 3))
		{
			// ECRIRE "Erreur. Veuillez ressaisir un nombre entre 1 et 3."
			$sMessage= "PHP essai n° " . $iNombreEsssai . ". Veuillez ressaisir un nombre entre 1 et 3.";
		}  else  {
			// ECRIRE "Bravo, tu as réussi !"
			$sMessage= "Bravo PHP, tu as réussi en " . $iNombreEsssai . " coups !";
		}
	}  else  {
		$iNombreEsssai= 0;
	}

	require "exo_1.html";
?>
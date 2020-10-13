<?php

$sMessage= "";
	
// SI $_POST["iRepUtilisateur"] EXISTE ET QUE $_POST["iRepUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iRepUtilisateur"])) && (!(empty($_POST["iRepUtilisateur"]))))
{
		// VARIABLE iNombreHasard, iRepUtilisateur, iNombreCoup en NUMERIQUE
		// var iRepUtilisateur;
		
		// ECRIRE "Trouvez le nombre mystère, compris entre 1 et 100"
		// LIRE iRepUtilisateur
		$iRepUtilisateur= $_POST["iRepUtilisateur"];
		
		// TANT QUE iRepUtilisateur != iNombreHasard
		$iNombreCoup= $_POST["iNombreCoup"];
		$iNombreHasard= $_POST["iNombreHasard"];

		$iNombreCoup++;
		if ($iRepUtilisateur != $iNombreHasard)
		{
			// SI (iRepUtilisateur < iNombreHasard) ALORS
			if ($iRepUtilisateur < $iNombreHasard)
			{
				// ECRIRE "Plus grand, essayez à nouveau :"
				// LIRE iRepUtilisateur
				$sMessage= "Plus grand, essayez à nouveau.";
			}
			else
			{
			// SINON
				// ECRIRE "Plus petit, essayez à nouveau :"
				// LIRE iRepUtilisateur
				$sMessage= "Plus petit, essayez à nouveau.";
			}
			// FINSI
		}
		else
		{
			// ECRIRE "Bravo, vous avez trouvé en " + iNombreCoup + " coup(s)."
			$sMessage= "Bravo, vous avez trouvé en " . $iNombreCoup . " coup(s).";
		}
		// FINTANTQUE
		
}  else  {
	$iNombreCoup= 0;
	$iNombreHasard= rand(1, 100);
}

	
	require "exo_2.html";

?>

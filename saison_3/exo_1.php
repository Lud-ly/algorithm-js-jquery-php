

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
				if (($iNombreUtilisateur < 0))
				{
					// ECRIRE "Erreur. Veuillez ressaisir un nombre entre 1 et 3."
					$sMessage= "PHP Le nombre est negatif.";
				} 
				else if (($iNombreUtilisateur > 0)){
					$sMessage= "PHP Le nombre est positif.";
				}
			}  
		
	require "exo_1.html";

?>

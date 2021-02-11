

<?php
			$sMessage= "";
	
			// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
			if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
			{
				// VARIABLE iNombreUtilisateur en NUMERIQUE
				// Inutile de les déclarer en php
				
				//
				// ECRIRE & LIRE iNombreUtilisateur
				$iNombreUtilisateur= $_POST["iNombreUtilisateur"];
				
				// SI ((iNombreUtilisateur < 0)ALORS
				if ($iNombreUtilisateur < 0)
				{
					// ECRIRE "Erreur. PHP Le nombre est negatif."
					$sMessage= "PHP Le nombre est negatif.";
				} 
				// ECRIRE "Erreur. PHP Le nombre est negatif."
				if ($iNombreUtilisateur >= 0){
					$sMessage= "PHP Le nombre est positif.";
				}
			}  
		
	require "exo_3_1.html";

?>

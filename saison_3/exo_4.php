

<?php
			$sMessage= "";
	
			// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
			
				// VARIABLE iNombreUtilisateur en NUMERIQUE
				// Inutile
				
				// ECRIRE "Entrez un nombre "
				// LIRE iNombreUtilisateur
				$iNombreUtilisateur= $_POST["iNombreUtilisateur"];
				
				if($iNombreUtilisateur == 0){
					$sMessage= "PHP Le nombre est null.";
				}
				// SI ((iNombreUtilisateur < 0))  ALORS
				if($iNombreUtilisateur < 0)
				{
					// ECRIRE " PHP Le nombre est negatif.
					$sMessage= "PHP Le nombre est negatif.";
				} 
				else if($iNombreUtilisateur > 0){
					$sMessage= "PHP Le nombre est positif.";
				}
				
				
			 
			
		
	require "exo_4.html";

?>

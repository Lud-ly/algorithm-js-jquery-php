

<?php
			$sMessage= "";
	
			// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
			if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
			{
				// VARIABLE iNombreUtilisateur en NUMERIQUE
				// Inutile
				
				// ECRIRE "Entrez un nombre "
				// LIRE iNombreUtilisateur
				$iNombreUtilisateur= $_POST["iNombreUtilisateur"];
				
				// SI ((iNombreUtilisateur < 0))  ALORS
				if($iNombreUtilisateur < 0)
				{
					// ECRIRE " PHP Le nombre est negatif.
					$sMessage= "PHP Le nombre est negatif.";
				} 
				// SI ((iNombreUtilisateur > 0))  ALORS
				if($iNombreUtilisateur > 0){
					$sMessage= "PHP Le nombre est positif.";
				}
				// SI ((iNombreUtilisateur = 0))  ALORS
				if($iNombreUtilisateur == 0){
					$sMessage= "PHP Le nombre est null.";
				}
				
			}	
			 
			
		
	require "exo_3_4.html";

?>

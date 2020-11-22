<?php
	
	$sMessage= "";
	// VARIABLE iNombreUtilisateur en NUMERIQUE
	// VARIABLE iNombreUtilisateur2 en NUMERIQUE
	// Inutile
	// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
	if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
			{
	//DEBUT
	// ecrire nombre1="donnez un nombre n°1 
	// ecrire nombre2="donnez un nombre n°2 
	//lire nombre1 et nombre2
	$iNombreUtilisateur= $_POST["iNombreUtilisateur"];
	$iNombreUtilisateur2= $_POST["iNombreUtilisateur2"];
	// Si Nombre1 ou Nombre2 est egal à 0 alors
	if($iNombreUtilisateur == 0 || $iNombreUtilisateur2 == 0) {
		$sMessage= "Bravo PHP le Nombre est null !";
    }
	// Si Nombre1 Nombre2 est supérieur à 0 alors
	else if ($iNombreUtilisateur > 0 && $iNombreUtilisateur2 > 0) 
		{
			//  Ecrire le Nombre est positif
			$sMessage= "Bravo PHP le Nombre est positif";
		}  
		// sinonsi iNombre < 0 alors
	else if($iNombreUtilisateur < 0 && $iNombreUtilisateur2 < 0) {
			$sMessage= "Bravo PHP le Nombre est negatif !";
	}
}
	//Fin

	require "exo_3_5.html";

?>

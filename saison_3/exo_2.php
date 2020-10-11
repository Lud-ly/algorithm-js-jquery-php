<?php
	$sMessage= "";
	// VARIABLE iNombreUtilisateur en NUMERIQUE
	// VARIABLE iNombreUtilisateur2 en NUMERIQUE
	// Inutile
	//DEBUT
	// ecrire nombre1="donnez un nombre n°1 
	// ecrire nombre2="donnez un nombre n°2 
	//lire nombre1 et nombre2
	$iNombreUtilisateur= $_POST["iNombreUtilisateur"];
	$iNombreUtilisateur2= $_POST["iNombreUtilisateur2"];
	// Si Nombre est supérieur à 0 alors
	if ($iNombreUtilisateur > 0 && $iNombreUtilisateur2 > 0) 
		{
			//  Ecrire le Nombre est positif
			$sMessage= "Bravo PHP le Nombre est positif";
		}  
		// sinonsi iNombre < 0 alors
	else if($iNombreUtilisateur < 0 && $iNombreUtilisateur2 < 0) {
			$sMessage= "Bravo PHP le Nombre est negatif !";
	}
	//Fin	

	
	require "exo_2.html";

?>

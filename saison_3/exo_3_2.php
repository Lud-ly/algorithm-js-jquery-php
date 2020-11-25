<?php
	$sMessage= "";
	// VARIABLE iNombreUtilisateur en NUMERIQUE
	// VARIABLE iNombreUtilisateur2 en NUMERIQUE
	// Inutile
	if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
			{
	//DEBUT
	// Ecrire nombre1="donnez un nombre n°1 
	// Ecrire nombre2="donnez un nombre n°2 
	//Lire nombre1 et nombre2
	$iNombreUtilisateur= $_POST["iNombreUtilisateur"];
	$iNombreUtilisateur2= $_POST["iNombreUtilisateur2"];
	// Si produit des Nombres est supérieur à 0 alors
	if ($iNombreUtilisateur * $iNombreUtilisateur2 > 0) 
		{
			//  Ecrire le Nombre est positif
			$sMessage= "Bravo PHP le Nombre est positif";
		}  
		// Si produit des Nombres est inférieur à 0 alors
	if($iNombreUtilisateur * $iNombreUtilisateur2 < 0) {
		 //Ecrire  le produit est négatif
			$sMessage= "Bravo PHP le Nombre est negatif !";
	}
	//Fin	
			}
	
	require "exo_3_2.html";

?>

<?php

$sMessage= "";

	// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
	if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
	{
	// Variables nombre, carré en Numérique
	$iNombre = $_POST["iNombreUtilisateur"];
	//Début
	//Ecrire "Entrez un nombre :"
	//Lire nombre
	// carré ← nombre * nombre
	$carré = $iNombre * $iNombre;
	//Ecrire "Son carré est : ", carré
	$sMessage = ("Bravo PHP Son carré est : " . $carré);

	//Fin
}
	
	require "exo_2.html";

?>

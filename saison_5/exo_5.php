<?php

$sMessage= "";

// SI $_POST["iRepUtilisateur"] EXISTE ET QUE $_POST["iRepUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
{
	$chain="";
	$sHTML= "La table de multiplication de ce nombre est : ";
	//Variables iNombre, i en Entier
	//Variables chain en caractère
	//Variables sHTML="La table de multiplication de ce nombre est :
	//Debut
	//Ecrire "Entrez un nombre : "
	// Lire iNombre
	$iNombre = $_POST["iNombreUtilisateur"];
	//Pour i ← 1 à 10
	for ($i = 0; $i <= 10; $i++) {
		// chain = chain + iNombre + " x ", i, " = ", iNombre * i
		$chain = $chain . $iNombre . " x " . $i . " = " . $iNombre * $i . " | " . " ";
	}
	//Ecrire afficher sHTML + chain
	$sMessage = "PHP " . $sHTML . $chain;
	//Fin
}
	
	require "exo_5.html";

?>

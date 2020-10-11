<?php

 $sMessage= "";
 	// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
	 if ((isset($_POST["nbrCopies"])) && (!(empty($_POST["nbrCopies"]))))
	 {

	//Variables nombre, prix en Numérique<br />
	//Début
	//inutile php
	
	//Ecrire "Nombre de photocopies : 
	//Lire nombre
	$nbrCopies = $_POST["nbrCopies"];
	//Si nombre <= 10 Alors
	// prix ← nombre * 0,1
	if ($nbrCopies <= 10) {
		$prix = $nbrCopies * 0.1;
	}
	//Sinonsi nombre <= 30 Alors
	// prix ← nombre * 0,1 pour les 10 premieres plus nombre - 10  (soit 20) à 0.09
	else if ($nbrCopies <= 30) {
		$prix = 10 * 0.1 + ($nbrCopies - 10) * 0.09;
	}
	//Sinon
	// prix ← nombre * 0,1 pour les 10 premieres plus 20 à 0.09 plus nombre-30(soit nombre au delà de 30) à 0.08
	else {
		$prix = 10 * 0.1 + 20 * 0.09 + ($nbrCopies - 30) * 0.08;
	}
	//Ecrire "Le prix total à payer est: ", prix
	$sMessage = ("Bravo PHP le prix à payer est de " . $prix . " €");

}//fin
	
	require "exo_4.html";

?>
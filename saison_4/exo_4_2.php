<?php

$sMessage= "";
	// Variables heures, minutes en Numérique
	//inutile php
	//Début

		//SI $_POST["iHeures"] EXISTE ET QUE $_POST["iHeures"] N EST PAS VIDE ALORS
		//SI $_POST["iMinutes"] EXISTE ET QUE $_POST["iMinutes"] N EST PAS VIDE ALORS
	if ((isset($_POST["iHeures"])) && (!(empty($_POST["iHeures"]))))
	{
	//Ecrire "Entrez les heures, puis les minutes : "
	//Lire heures,minutes
	
	$iHeures = $_POST["iHeures"];
	$iMinutes =  $_POST["iMinutes"];
	//Si minutes = 60 Alors
	$iMinutes += 1;
	if ($iMinutes == 60) {
		$iMinutes = 0;
		$iHeures += 1;
		//minutes = 0 et heures = heures+1
	}
	// Si heures = 24 Alors
	if ($iHeures == 24) {
		// heures = 0;
		$iHeures = 0;
	}
	//ecrire la nouvelle heure
	$sMessage = ("Merci PHP, Dans une minute il sera " .  $iHeures . " heure(s) " . $iMinutes . " minute(s)");
}

	
	require "exo_4_2.html";

?>

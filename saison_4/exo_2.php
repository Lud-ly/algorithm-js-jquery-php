<?php

$sMessage= "";
	// Variables heures, minutes en Numérique
	//inutile php
	//Début
	//if ((isset($_POST["iHeures"])) && (!(empty($_POST["iMinutes"]))))
	//{
		
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
//}
	
	//ecrire la nouvelle heure
	$sMessage = ("Merci PHP, Dans une minute il sera " .  $iHeures . " heure(s) " . $iMinutes . " minute(s)");
	
	require "exo_2.html";

?>

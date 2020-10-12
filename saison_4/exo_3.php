<?php

$sMessage= "";
// SI $_POST["iheures,iminutes,iSecondes"] EXISTE ET QUE $_POST["iheures,iminutes,iSecondes"] N EST PAS VIDE ALORS
if ((isset($_POST["iSecondes"])) && (!(empty($_POST["iSecondes"]))))
{
// Variables heures, minutes en Numérique
//inutile php
//Début
	
//Ecrire "Entrez les heures, puis les minutes : "
//Lire heures,minutes,secondes

$iHeures = $_POST["iHeures"];
$iMinutes =  $_POST["iMinutes"];
$iSecondes =  $_POST["iSecondes"];
//Si secondes = 60 Alors
$iSecondes += 1;
if($iSecondes==60){
	$iSecondes=0;
	$iMinutes+=1;
}
//Si minutes = 60 Alors
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
$sMessage = ("Merci PHP, Dans une minute il sera " .  $iHeures . " heure(s) " . $iMinutes . " minute(s)". $iSecondes . "secondes");
	
}


	require "exo_3.html";

?>

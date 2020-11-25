<?php

$sMessage= "";

// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iPret1"])) && (!(empty($_POST["iPret1"]))))
{
	//Variables trum, melencho, pouti, macro en Numérique
	//Variables Cas1, Cas2, Cas3, Cas4 en Booléen
	

	//Début
	//Ecrire "Entrez les scores des quatre prétendants :"
	//Lire trump, melenchon, pouti, macron
	$trum = $_POST["iPret1"];
	$melencho = $_POST["iPret2"];
	$pouti = $_POST["iPret3"];
	$macro = $_POST["iPret4"];


	$cas1 = $trum > 50;
	$cas2 = $melencho > 50 && $pouti > 50 && $macro > 50;
	$cas3 = $trum >= $melencho && $trum >= $pouti && $trum >= $macro;
	$cas4 = $trum >= 12.5;

	//Si Cas1 Alors
	if ($cas1) {
		//Ecrire “Elu au premier tour
		$sMessage = "Bravo PHP Elu au premier tour";
	}
	// Sinonsi Cas2 ou Non(Cas4) Alors
	else if ($cas2 || $cas4 == false) {
		//Ecrire “Battu, éliminé, sorti !!!
		$sMessage = ("PHP Battu, éliminé, sorti !!!");
	}
	// SinonSi Cas3 Alors
	else if ($cas3) {
		//Ecrire "Ballotage favorable"
		$sMessage = ("PHP Ballotage Favorable");
	}
	//sinon
	else {
		//Ecrire "Ballotage défavorable
		$sMessage = ("PHP Ballotage Defavorable");
	}
}//fin

	
	require "exo_4_6.html";

?>

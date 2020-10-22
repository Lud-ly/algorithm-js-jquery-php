<?php

$sMessage = "";
$sMessage2 = "";
$sMessage3 = "";
$sMessage4 = "";
	// Tableau Suite(7) en Entier
	//Variable i en Entier
	// Début
	$suite = [];
	$i = 2;
	
	// Suite(0) ← 1
	// Suite(1) ← 1
	$sMessage = $suite[0] = 1;
	$sMessage2= $suite[1] = 1;
	//Pour i ← 2 à 7
	if ($i <= 7) {
		//Suite(i) ← Suite(i-1) + Suite(i-2)
		$suite[$i] = $suite[$i - 1] + $suite[$i - 2];
		$suite=$suite[$i];
		$sMessage3  = $suite[$i];
	}
	$sMessage4  = "PHP " . 	$suite;

 //Fin  
	
	require "exo_6_6.html";

?>

<?php

$sMessage = "";
	// Tableau Suite(7) en Entier
	//Variable i en Entier
	// Début
	$suite = [];
	$chain="";
	
	// Suite(0) ← 1
	// Suite(1) ← 1
	$suite[0] = 1;
	$suite[1] = 1;
	//Pour i ← 2 à 7
	for($i=1;$i <= 7;$i++) {
		//Suite(i) ← Suite(i-1) + Suite(i-2)
		$suite[$i] = $suite[$i - 1] + $suite[$i - 2];
		$chain= $chain . $suite[$i];
	}
	$sMessage  = "PHP " . 	$chain;

 //Fin  
	
	require "exo_6_6.html";

?>

<?php

$sMessage = "";
// SI $_POST["myPhp"] EXISTE ET QUE $_POST["myPhp"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && ((empty($_POST["myPhp"]))))
{
	// Tableau Suite(7) en Entier
	//Variable i en Entier
	// Début
	$suite = array(7);
	
	// Suite(0) ← 1
	// Suite(1) ← 1
	$suite[0] = 1;
	$suite[1] = 1;
	//Pour i ← 2 à 7
	for($i=2;$i <= 7;$i++) {
		//Suite(i) ← Suite(i-1) + Suite(i-2)
		$suite[$i] = $suite[$i - 1] + $suite[$i - 2];
	}
	$sMessage  = "PHP " . implode("," ,$suite);

}//Fin  
	
	require "exo_6_6.html";

?>

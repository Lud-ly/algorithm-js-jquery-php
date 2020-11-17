<?php

$sMessage= "";
$sMessage2= "";
$twoDim =array(array(),array());
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"]  EST  VIDE ALORS
// if ((isset($_POST["myVal"])) && ((empty($_POST["myVal"]))))
// {
	//Variable Tableau twoDim(5, 12) en Entier
	
	var_dump($twoDim);
	//Debut
	//Pour i ← 0 à 5
	
	for ($i = 0; $i <= 5; $i++) {
		$twoDim[$i] = 0;
		//$twoDim[$i] = 0;
		for ($j = 0; $j <= 12; $j++) {
			// Pour j ← 0 à 12
			$twoDim[$j][$i] = 0;
			// twoDim(i, j) ← 0
		}// j Suivant
		//var_dump($twoDim[$i]);
	} // i Suivant
	
	$sMessage = ("PHP");
	$sMessage2 = implode(",",$twoDim);
//}// Fin
	
	require "exo_8_1.html";

?>

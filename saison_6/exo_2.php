<?php


$sMessage="";
$sAphbLatin = ("A". "E" ."i". "O" . "U" . "Y");

	for ($i = 0; $i <= 5; $i++) {
		//stuff(i) ← 0
		$voyelles = $voyelles . "[ " . 	$sAphbLatin[$i] . " ]";
		
	} 
	$sMessage= " PHP " . $voyelles;
//Fin

	require "exo_2.html";

?>

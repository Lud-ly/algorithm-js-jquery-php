<?php
	
$sMessage= "";
$sMessage2= "";

$i = 2;
$iTabNotes = [];


if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
	$iNotes =  $_POST["myPhp"];
	
	//Pour i ← 0 à 8
	if($i <= 8) {
		$iTabNotes = $iNotes ;
		$sMessage = "Entrez la note numéro ". $i++;
	}
	
		//Ecrire Notes
		$sMessage2 = "PHP " . $iTabNotes;
	} // Fin
		

	require "exo_3.html";

?>
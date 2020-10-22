<?php
	
$sMessage= "";
$sMessage2= "";
 //Variables global tableau notes,i=2
 
$iTabNotes = [];

if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
		//$i=1;
	//Lire input
	//Ajouter value à notes
	$iNotes =  $_POST["myPhp"];
	
 //Si les notes =8
	if($i <= 8) {
		//iTab=iNotes
		$i++;
		$iTabNotes=$iNotes;
		$sMessage = "Entrez la note numéro ". $i;
		 //Ecrire Entrer la notes n°"+i suivant
		
		//var_dump($iTabNotes);
	}
	//Ecrire Notes

		$sMessage2 = "PHP " . $iTabNotes;
	} // Fin
		

	require "exo_6_3.html";

?>
  
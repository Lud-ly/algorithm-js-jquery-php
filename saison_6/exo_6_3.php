<?php
	session_start();
$sMessage= "";
$sMessage2= "";
 //Variables global tableau notes,i=2
 
$iTabNotes = [];
$i=0;
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
		//$i=1;
	//Lire input
	//Ajouter value à notes
	$iNotes =  $_POST["myPhp"];
	
 //Si iTabNotes =8
	if($i <= 9) {
		//iTabNotes=iNotes
		$i++;
		$_SESSION["iTabNotes"][]=$iNotes;
		$sMessage = "Entrez la note numéro ". $i;
		 //Ecrire Entrer la notes n°"+i suivant
		
		//var_dump($iTabNotes);
	}
	//Ecrire Notes

		$sMessage2 = "PHP " . 	(int)$_SESSION["iTabNotes"];
	} // Fin
		

	require "exo_6_3.html";

?>
  
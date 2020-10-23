<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";
$sMessage4= "";
//Variables Tableau Notes(8) ,Notes=[] en Numérique
//Variables i,total,Moy en Numérique
$i = 2;
$iTabNotes = array();

// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
		$iNotes = 0;
		$moy=0;
	
	//Ecrire "Entrez la note numéro ", i + 1
	//Lire Notes(i)
	
	$sMessage = "Entrer la note n° ". $i++;

	$iNotes =  $_POST["myPhp"];
	 array_push($iTabNotes,$iNotes);
	 var_dump($iTabNotes);
	 $iSom =  array_sum($iTabNotes);
	
	 
	//Pour i ← 0 à 8
	if(count($iTabNotes)<=8) {
		//Notes = Notes + "[ " + iTabNotes[i] + " ]"
		$sMessage2 = "PHP voici les notes " . $iNotes;
	
	}
	//Ecrire Notes
	
	//Moy = somme des notes / le nombre de notes dans itabNotes
	$moy = $iSom / count($iTabNotes);
	//var_dump($moy);
	//Ecrire Notes + moyenne
	$sMessage4 = " La moyenne est de : " . $moy ;
} // Fin
		
	
	require "exo_6_7.html";

?>

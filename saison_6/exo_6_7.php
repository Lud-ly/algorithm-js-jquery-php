<?php

$sMessage= "";
$sMessage2= "";
//Variables Tableau Notes(8) ,Notes=[] en Numérique
//Variables i,total,Moy en Numérique
$i = 2;
$iTabNotes = array();
$iNotes = 0;
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
	$sMessage = "Entrer la note n° ".$i;
	//Ecrire "Entrez la note numéro ", i + 1
	//Lire Notes(i)
	$iNotes =  $_POST["myPhp"];
	
	//Pour i ← 0 à 8
	for($i = 0;$i<=8;$i++) {
		//Notes = Notes + "[ " + iTabNotes[i] + " ]"
		$iNotes = $iNotes + $iTabNotes[$i];
		
	}
	//Ecrire Notes
	$iSom =  array_sum($iTabNotes);
	//Moy = somme des notes / le nombre de notes dans itabNotes
	$moy = $iSom/strlen($iTabNotes);
	//Ecrire Notes + moyenne
	$sMessage2 = "PHP voici les notes " . $iTabNotes . " La moyenne est de : " . $moy ;
} // Fin
		
	
	require "exo_6_7.html";

?>

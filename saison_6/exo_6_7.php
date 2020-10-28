<?php
session_start();
$sMessage= "";
$sMessage2= "";
$sMessage3= "";
$sMessage4= "";
//Variables Tableau Notes(8) ,Notes=[] en Numérique
//Variables i,total,Moy en Numérique
$i = 1;
$iTabNotes =[];
$iNotes = 0;
$moy=0;

// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
	//Ecrire "Entrez la note numéro ", i + 1
	//Lire Notes(i)
	$iNotes =  (int)$_POST["myPhp"];
	for($i=1;$i!=8;$i++){
		$sMessage = "Entrer la note n° ". $i;
		
	}
	// array_push($iTabNotes,$iNotes);
	$_SESSION["iTabNotes"][]=$iNotes;
	 var_dump($_SESSION["iTabNotes"]);
	 $iSom =  array_sum($_SESSION["iTabNotes"]);

	if(count($_SESSION["iTabNotes"])==8) {
		//Notes = Notes + "[ " + iTabNotes[i] + " ]"
		$sMessage2 = "PHP voici les notes " . $iNotes;
	
	}
	//Ecrire Notes
	
	//Moy = somme des notes / le nombre de notes dans itabNotes
	$moy = $iSom / count($_SESSION["iTabNotes"]);
	//var_dump($moy);
	//Ecrire Notes + moyenne
	$sMessage4 = " La moyenne est de : " . $moy ;
} // Fin
		
	
	require "exo_6_7.html";

?>

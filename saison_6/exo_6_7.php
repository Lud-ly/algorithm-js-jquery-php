<?php
	
$sMessage= "";
$sMessage2= "";
//Variables Tableau Notes(8) ,Notes=[] en Numérique
//Variables i,total,Moy en Numérique
$iTabNotes =array(8);
$iNotes = 0;
$moy=0;

// SI $_POST["myPhp"] EXISTE ET QUE $_POST["myPhp"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
	
	//Ecrire Entrer les notes 
	//Lire iTabNotes
	$iTabNotes = explode(" ",$_POST["myPhp"]);
		//Ecrire Voici les Notes
	$sMessage .= "Voici les notes  : " . implode("," ,$iTabNotes);
	//Calculer somme des élements du Tableau
		$iSom =  array_sum($iTabNotes);
	//Moy = somme des notes / le nombre de notes dans itabNotes
	$moy = $iSom / count($iTabNotes);
	//var_dump($moy);
	//Ecrire Notes + moyenne
	$sMessage2 = " La moyenne est de : " . $moy ;

} // Fin
	require "exo_6_7.html";

?>

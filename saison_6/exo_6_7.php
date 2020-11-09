<?php
	
session_start();

$sMessage= "";
$sMessage2= "";
$sMessage3= "";
$sMessage4= "";
//Variables Tableau Notes(8) ,Notes=[] en Numérique
//Variables i,total,Moy en Numérique
$iTabNotes =array(8);
$iNotes = 0;
$moy=0;
$chain = "";

// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
	//Ecrire "Entrez la note numéro ", i + 1
	//Lire Notes(i)
	
	for($i = 1; $i <= 8; $i++){
	$sMessage = "Entrer la note n° ". $i;
	$iNotes =  (int)$_POST["myPhp"];
	$_SESSION["iTabNotes"][]=$iNotes;
	
	 $iSom =  array_sum($_SESSION["iTabNotes"]);
}
var_dump($_SESSION["iTabNotes"]);
	//Ecrire Notes
	
	//Moy = somme des notes / le nombre de notes dans itabNotes
	$moy = $iSom / count($_SESSION["iTabNotes"]);
	//var_dump($moy);
	//Ecrire Notes + moyenne
	$sMessage1 = " La moyenne est de : " . $moy ;

} // Fin

	require "exo_6_7.html";

?>

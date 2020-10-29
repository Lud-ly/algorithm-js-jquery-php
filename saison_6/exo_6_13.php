<?php
session_start();
$sMessage= "";
$sMessage2= "";
$sMessage3= "";
$sMessage4= "";

$i = 2;
$T = [];
$nb = 0;
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
	// Variables Nb, Nbpos, Nbneg en Numérique
	//Variables global Tableau T() ,i en Numérique
	$max = 0;
	$y = 0;
	$pos = 0;
	//  Ecrire "Entrez le nombre n° ", i + 1 
	// Lire T(value)
		$sMessage = ("Entrer la notes n°" . $i++);
		$valeur =  (int)$_POST["myPhp"];
		$_SESSION["myTab"][]=$valeur;
		
	//var_dump($_SESSION["myTab"]);
	//Si nb = longueur de T alors
	if (count($_SESSION["myTab"]) == 2) {
		//Ecrire Notes
		$sMessage2 = ("php Voici le nouveau tableau : " . $_SESSION["myTab"]);
	}//FinSi
	//pacourir valeur de T
		foreach($_SESSION["myTab"] as $valeur){
		if ($valeur > $max) {
			$max = $valeur;
			$pos = $y;
		}
		$y = $y + 1;

	};
	$sMessage3 = ("php le nombre le plus grand est : " . $max);
	$sMessage4 = ("la position du nombre est : " . $pos);
}// Fin         
	
	require "exo_6_13.html";

?>

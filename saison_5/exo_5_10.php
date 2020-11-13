<?php


$sMessage= "";
$sMessage2= "";
$sMessage3= "";
$sMessage4= "";
$sMessage5= "";
 // SI $_POST["iRepUtilisateur"] EXISTE ET QUE $_POST["iRepUtilisateur"] N EST PAS VIDE ALORS
 if ((isset($_POST["montant_verse"])) && (!(empty($_POST["montant_verse"]))))
 {
	//Variabes price;montant_verse;bill10E;bill5E;Reste en Numerique
	$price = 1000;
	$montant_verse = 0;
	$bil50E = 0;
	$bil10E = 0;
	$bil5E = 0;
	$reste = 0;
	//Ecrire "vous nous devez :,price"
	//Ecrire "SVP Payer la somme 1000€ :"
	//Lire Montant_verse
	$montant_verse = $_POST["montant_verse"];
	//reste = price- montant_verse
	$reste = $price - $montant_verse;
	  //Tantque reste est superieur ou egal à 50 alors
	  while ($reste >= 50) {
		//bil50E = bil50E + 1 et reste = reste - 10
		$bil50E = $bil50E + 1;
		$reste = $reste - 50;
	}//Fin Tantque
	//Tantque reste est superieur ou egal à 10 alors
	while ($reste >= 10) {
		//bil10E = bil10E + 1 et reste = reste - 10
		$bil10E = $bil10E + 1;
		$reste = $reste - 10;
	}//Fin Tantque
	//Tantque reste est superieur ou egal à 5 alors
	while ($reste >= 5) {
		//  bil5E += 1 reste = reste - 5
		$bil5E += 1;
		$reste = $reste - 5;
	}//Fin Tantque
	//Ecrire "Retour de la monnaie :"
	//bil10E + " Billet(s) de 10"
	//bil5E + " Billet(s) de 5"
	//reste + " Piece(s) de 1€"
	$sMessage= ("PHP Retour de la monnaie :");
	$sMessage2= ($bil50E . " Billet(s) de 50$");
	$sMessage3= ($bil10E . " Billet(s) de 10$");
	$sMessage4= ($bil5E . " Billet(s) de 5$");
	$sMessage5= ($reste . " Piece(s) de 1$");
}//Fin
	
	require "exo_5_10.html";

?>

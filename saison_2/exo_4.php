<?php

$sMessage="";
// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["Variante"])) && (!(empty($_POST["Variante"]))))
{
	//VARIABLES VARIANT,VARIANT1,VARIANT2,VARIANT3,VARIANT4 EN STRING
	$sOne = " Belle marquise ";
	$sTwo = " Vos beaux yeux ";
	$sThree = " Me font ";
	$sFour = " Mourir d’amour ";
	//DEBUT
	$Variante = $_POST["Variante"];
	//SI VARIANT1 ALORS
	//ECRIRE one+two+three+four
	if ($Variante == 1) {
		$sMessage = ("PHP->" . $sThree . $sTwo . $sOne . $sFour);
	}
	//SI VARIANT2 ALORS
	if ($Variante == 2) {
		//ECRIRE two+one+three+four
		$sMessage = ("PHP->" . $sTwo . $sOne . $sThree . $sFour);
	}
	//SI VARIANT3 ALORS
	if ($Variante == 3) {
		//ECRIRE one+two+four+three
	$sMessage = ("PHP-> ". $sOne . $sTwo . $sFour . $sThree);
	}
	//ECRIRE two+three+one+four
	//SI VARIANT4 ALORS
	if ($Variante == 4) {
		//ECRIRE four + one + three + two
		$sMessage = ("PHP-> ". $sFour . $sOne . $sThree . $sTwo);
	}
	//FIN
}
	
	require "exo_4.html";

?>

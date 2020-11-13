<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";
 // SI $_POST["iRepUtilisateur"] EXISTE ET QUE $_POST["iRepUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iNombreUtilisateur1"])) && (!(empty($_POST["iNombreUtilisateur1"]))))
{
	//VARIABLES N1 N2 N3 =1
	//VARIABLES i NbMax position  =0
	$N1 = 1;
	$N2 = 1;
	$N3 = 1;
	$i = 0;
	$NbMax = 0;
	$Position = 0;
	//Si N1 != 0 || N2 != 0 || N3 != 0
	if ($N1 != 0 || $N2 != 0 || $N3 != 0) {
		//  Ecrire entrer un nombre 1
		//Lire N1
		$N1 = $_POST["iNombreUtilisateur1"];
		//Si N1>NbMax
		if ($N1 > $NbMax) {
			//NbMax = N1 ; i++; Position = i
			$NbMax = $N1;
			$i=$i+1;
			$Position = $i;
		}
		//  Ecrire entrer un nombre 2
		//lire N2
		$N2 = $_POST["iNombreUtilisateur2"];
		//Si N2>NbMax
		if ($N2 > $NbMax) {
			//NbMax = N2 ; i++; Position = i
			$NbMax = $N2;
			$i=$i+1;
			$Position = $i;
		}
		//  Ecrire entrer un nombre 3
		//Lire N3
		$N3 =$_POST["iNombreUtilisateur3"];
		//Si N3>NbMax
		if ($N3 > $NbMax) {
			//NbMax = N3 ; i++; Position = i
			$NbMax = $N3;
			$i=$i+1;
			$Position = $i;
		}
		//Ecrire Le nombre le plus grand était : " + NbMax
		//Ecrire Il a été saisi en position numéro " + Position
		$sMessage = "PHP Le nombre le plus grand était : " . $NbMax;
		$sMessage2 = "Il a été saisi en position numéro " . $Position;
	}//FinSi
	//Si N1 ou N2 ou N3 = 0
	else if($N1 == 0 || $N2 == 0 || $N3 == 0) {
		//Ecrire Arrêt du Programme
		$sMessage3 = ("Arrêt du Programme !!");
	} //FinSi
}//Fin
	
	require "exo_5_9.html";

?>

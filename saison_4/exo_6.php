<?php

$sMessage= "";
// DEBUT
//VARIABLE tutu en numerique
//VARIABLE toto en numerique
//VARIABLE sTata ="ok"
//inutile php
//SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iValeurTutu"])) && (!(empty($_POST["iValeurTutu"]))))
{
//ecrire entrez une valeur pour tutu
//ecrire entrez une valeur pour toto
//tutu et toto
$iValeurTutu= $_POST["iValeurTutu"];
$iValeurToto= $_POST["iValeurToto"];
$iValeursTata= $_POST["iValeurTata"];
//loi de morgan
//Si Tutu <= Toto + 4 ET sTata <> "OK" Alors
if($iValeurTutu <= $iValeurToto + 4 ) {
	// Tutu ← Tutu - 1
	$iValeurTutu -=1;
}
// Sinon
else {
	// Tutu ← Tutu + 1
	$iValeurTutu +=1;
}
$sMessage= ($iValeurTutu);
//fin
}

	
	require "exo_6.html";

?>


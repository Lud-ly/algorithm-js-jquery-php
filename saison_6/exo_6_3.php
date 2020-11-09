<?php
 session_unset();
session_start();
$sMessage="";
//$T="";
$i=0;

if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
{

//DEBUT
//Variable Tableau T en caractère
// Variable iNote en numerique
$iNote = (int)$_POST["iNombreUtilisateur"];

// Ecrire "Les 10 notes sont : "
$sHTML = "Les 10 notes sont : " ;
//Si i <10 alors
if($i <= 10) {
	$_SESSION["T"] = $_SESSION["T"] . "  " . $iNote;
	$i++;
  } //Fin Pour
  var_dump( $_SESSION["T"]);
  $sMessage= "BRAVO PHP :  ". $sHTML . $_SESSION["T"];
 } //FIN
		

	require "exo_6_3.html";

?>
  
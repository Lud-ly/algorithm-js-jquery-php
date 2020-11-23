<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";

$phrase = "";
$charDelete = 0;
$newPhrase = "";
// SI $_POST["valPhp"] EXISTE ET QUE $_POST["valPhp"] N EST PAS VIDE ALORS
if ((isset($_POST["myVal"])) && (!(empty($_POST["myVal"]))))
{



	$phrase = $_POST["myVal"];
	
	$sMessage = ("PHP Initial phrase : " . $phrase);
	$charDelete= $_POST["myRang"];
	$phrase = substr($phrase, $charDelete+1,strlen($phrase)) ;
	
   	$sMessage2=("Phrase after delete : " . $phrase);
	$newPhrase =$_POST["newVal"];
	$phrase = substr_replace($phrase, $newPhrase,strlen($phrase));
	$sMessage3 =("Voici la nouvelle phrase est : " .  $phrase);
}
	
	require "exo_9_5.html";

?>

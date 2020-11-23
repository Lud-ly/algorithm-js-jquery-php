<?php

$sMessage="";$sMessage2="";$sMessage3="";$sMessage4="";
// SI $_POST["valPhp"] EXISTE ET QUE $_POST["valPhp"] N EST PAS VIDE ALORS
if ((isset($_POST["myVal"])) && (!(empty($_POST["myVal"]))))
{
	for ($i = 0; $i < 1; $i++) {
		$decimale = rand(1, 99);
		$decimale2 = rand(35, 65);
		$decimale3 = rand(1, 50);
	
		$sMessage=("PHP( 0 =< Glup =< 2) => : " . (rand(0,2)). ",".$decimale);
		$sMessage2=("(1,35 =< Glup =< 1,65) => : " . (rand(1,1).",".$decimale2));
		$sMessage3=("(–1 =< Glup =< 1) => : " . (rand(-1,99)/100));
		$sMessage4=("( –10,5 =< Glup =< +6,5) => : " . (rand(6,-10)).",".$decimale3);
	}

}	
	require "exo_9_8.html";

?>
<?php

$sMessage = "";
	// Tableau Nb(5) en Entier
	//Variable i en Entier
    $nb="";
	if ((isset($_POST["div_resultat_js"])) && (!(empty($_POST["div_resultat_js"]))))
	{
	// Début
	// Pour i ← 0 à 5
	for($i=0;$i <= 5;$i++) {
		//Nb(i) ← i * i
        $nb =  $nb+$i * $i;
    }
    $sMessage = "php " . $nb;
}
	
	require "exo_4.html";

?>

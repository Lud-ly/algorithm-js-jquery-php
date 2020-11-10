<?php

$sMessage="";

// SI $_POST["div_resultat_js"] EXISTE ET QUE $_POST["div_resultat_js"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && ((empty($_POST["myPhp"]))))
{
	//Tableau iStuff[6] en Numérique
	//Variable i en Numérique
	//Debut
	//Pour i ← 0 à 6
	for ($i = 0; $i <= 6; $i++) {
		//iStuff(i) ← 0
		$iStuff = $iStuff . " [ " . 0 . " ] ";
	 } 
     //Ecrire iStuff
    $sMessage .= "PHP : " . $iStuff;
}//Fin

	

	
	require "exo_6_1.html";

?>

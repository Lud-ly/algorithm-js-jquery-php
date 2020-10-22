<?php

$sMessage="";

// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
	//if ((isset($_POST["whyNot"])) && (!(empty($_POST["whyNot"]))))
	//{
	//Tableau iStuff[6] en Numérique
	//Variable i en Numérique
	//Debut
	//Pour i ← 0 à 6
	for ($i = 0; $i <= 7; $i++) {
		//iStuff(i) ← 0
		$iStuff = $iStuff . "[ " . 0 . " ]";
	 } 
     //Ecrire iStuff
    $sMessage= "PHP" . $iStuff;
//}
//Fin
	

	
	require "exo_6_1.html";

?>

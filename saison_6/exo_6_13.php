<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";
$sMessage4= "";

$iTab = [];
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
	// Variables max, pos,i,y en Numérique
	//Variables Tableau iTab()  en Numérique
	$max = 0;
	$y = 0;
	$pos = 0;

	// Lire iTab(value)
		$iTab = explode(" " ,$_POST["myPhp"]);
		
		//Ecrire Notes
		$sMessage2 = ("PHP Voici le tableau : " . implode("," ,$iTab));

	//Pacourir toutes les valeurs de iTab
		foreach($iTab as $val){
		//Si la valeur est superieure au nombre max alors
		if ($val > $max) {
			//max = valeur
			$max = $val;
			//Position = y
			$pos = $y;
		}
		//$y += 1
		$y++;

	};
	//Ecrire le nombre le plus grand est :,max
	//La position du nombre est : ,pos
	$sMessage3 = ("Le nombre le plus grand est : " . $max);
	$sMessage4 = ("La position du nombre est : " . $pos);
}// Fin         
	
	require "exo_6_13.html";

?>

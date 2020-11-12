<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";
//Variables myTab result en Numérique
	

$myTab = [];
//Début
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["valPhp"])) && (!(empty($_POST["valPhp"]))))
{
	//Lire toutes les valeurs dans le tableau
	$myTab = explode(" " ,$_POST["valPhp"]);
	//Ecrire "tab non-trié" ,myTab
	$sMessage = ("Php myTab non-trié " . implode("," ,$myTab));
	$valeur=0;
	$j;
	//Pour i←0 à longueur de tab
	for ($i = 0; $i < count($myTab); $i++) {
		//on prends la valeur à l'index i
		$valeur = $myTab[$i];
		// index de départ 0
		 //j←i
		$j = $i;
		 //Tant que j est supérieur à 0 et tab[j]est supérieur à iValeur alors
		while ($j > 0 && $myTab[$j - 1] > $valeur) {
			//On décale j à j-1
			$myTab[$j] = $myTab[$j - 1];
			 //j←j-1
			$j = $j - 1;
			
		}//Fin de tant que
		  //tab[j]←iValeur
		$myTab[$j] = $valeur;
	}//i Suivant
	//Ecrire "tab trié par insertion ",myTab
	$sMessage3 = ("Php myTab trié par insertion " . implode("," ,$myTab));
}//Fin


	require "exo_6_17.html";

?>

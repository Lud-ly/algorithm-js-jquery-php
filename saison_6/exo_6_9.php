<?php

$sMessage = "";
$sMessage2 = "";
	
// SI $_POST["myPhp"] EXISTE ET QUE $_POST["myPhp"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && ((empty($_POST["myPhp"]))))
{
//Variables i,  Som ← 0, N en Numérique
//Tableau T(N) en Numérique
	$som = 0;
	$tableau = [1, 56, 8, 6, 5, 4, 7, 8, 2, 3, 2];
		//Debut
        //  Pour i ← 0 à longueur du Tableau
	for ($i = 0; $i < count($tableau); $i++) {
		//  Som ← Som + T(i)
        //i Suivant
		$som = $som + $tableau[$i];
		
	}
	//  Ecrire "Les éléments du tableau sont : : ", Tableau
	//Ecrire "La Somme des éléments est : ", Som
	$sMessage = ("PHP Les éléments du tableau sont: " . implode("," ,$tableau));
	$sMessage2 = ("La Somme des éléments est de  : " . $som);

}// Fin
	require "exo_6_9.html";

?>

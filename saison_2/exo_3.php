<?php

$sMessage= "";
if ((isset($_POST["nbArticle"])) && (!(empty($_POST["nbArticle"]))))
		{
	// Variables nbArticle,TauxTva,PrixHt,prixTtc en Numerique;
	//var nbArticle, TauxTva, PrixHt, PrixTtc;
	// Début
	//Ecrire "Entrez le prix du produit hors taxes :
	// Lire PrixHt
	$PrixHt = $_POST["PrixHt"];
	//Ecrire "Entrez le nombre d’articles :"
	//Lire nbArticle
	$nbArticle =  $_POST["nbArticle"];
	//Ecrire "Entrez le taux de TVA :"
	//Lire TauxTva
	$TauxTva = $_POST["TauxTva"];
	// prixTtc = nbArticle * PrixHt * (1 + TauxTva/100);
	$PrixTtc = $nbArticle * $PrixHt * (1 + $TauxTva / 100);
	//Ecrire "Le prix toutes taxes est : ", pttc
	$sMessage = ("PHP Le prix toutes taxes est : " . $PrixTtc.round(2) . "€");
	//Fin
}
	
	require "exo_3.html";

?>
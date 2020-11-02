<?php
session_start();
//session_unset();
$sMessage= "";
$sMessage2= "";
	//Variables compte=1000,taux=2.75,interet,année,dateAnnif en numérique
	//Array tabCompt en numérique
	$compte = 1000;
	$taux = 2.75;
	$interet = 0;
	$tabCompt = [];
	$année = 1;
	$dateAnnif = 0;
	$soldYear = 0;
	//Début
	// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
 if ((isset($_POST["soldPhp"])) && (!(empty($_POST["soldPhp"]))))
 {
	//Calcul des intéret
	$interet = ($compte * $taux) / 100;
	//Ecrire Consulter le solde d'une année  1 à 20
	//Lire soldYear
	$soldYear =  $_POST["soldPhp"];
	//Pour année de 0 inferieur 20
	while ($année <= 20) {
		//Ajout des intérets sur le compte
		$compte = $compte + $interet;
		//Ajouter valeurs dans le tableau
		(float)$_SESSION["tabCompt"][]= $compte ;
		$sMessage2 = ($année . "EME année" . " solde " . $compte . " € " . " <br/>  ");
		$dateAnnif = $année;
		$année++;
		//Si soldYear = dateAnnif
		if ($soldYear == $dateAnnif) {
			//Ecrire l'année et le solde
			$sMessage = (($année - 1) . " ème Anniversaire " . "PHP Solde de Titi : " . $compte . " € ");
		}//FinSi
	
	}//année suivant
}//Fin
	
	require "exo_6_15.html";

?>

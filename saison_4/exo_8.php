<?php

$sMessage= "";
if ((isset($_POST["iJourDate"])) && (!(empty($_POST["iJourDate"]))))
{
	//Variables Jour, Mois, Année en Numérique
	//inutile PHP
	//Début
	//Ecrire "Entrez le numéro du jour"
	//Lire Jour
	$iJour = $_POST["iJourDate"];
	//Ecrire "Entrez le numéro du mois"
	//Lire Mois
	$iMois = $_POST["iMoisDate"];
	//Ecrire "Entrez l'année"
	//Lire Année
	$iAnnée = $_POST["iAnnéeDate"];
	//Si Mois < 1 ou Mois > 12 Alors
	if ($iMois < 1 || $iMois > 12) {
		//Ecrire "Date Invalide"
	$sMessage = ("PHP Date invalide");
	}
	//SinonSi Mois = 2 Alors
	else if ($iMois == 2) {
		//Si Année dp 400 Alors
		if ($iAnnée / 400) {
			//Si Jour < 1 ou Jour > 29 Alors
			if ($iJour < 1 || $iJour > 29) {
				//Ecrire "Date Invalide"
				$sMessage = ("PHP Date invalide");
			}
			//sinon
			else {
				//Ecrire "Date Valide"
				$sMessage = ("PHP Date valide");
			}
		}//finsi
		//SinonSi Année dp 100 Alors
		else if ($iAnnée / 100) {
			//Si Jour < 1 ou Jour > 28 Alors
			if ($iJour < 1 || $iJour > 28) {
				// Ecrire "Date Invalide"
				$sMessage = ("PHP Date invalide");
			}//sinon
			else {
				//Ecrire "Date Valide"
				$sMessage = ("PHP Date valide");
			}
		}//finsi
		//SinonSi Année dp 4 Alors
		else if ($iAnnée / 4) {
			//Si Jour < 1 ou Jour > 29Alors
			if ($iJour < 1 || $iJour > 29) {
				$sMessage = ("PHP Date invalide");
			}//sinon
			else {
				//  Ecrire "Date Valide"
				$sMessage = ("PHP Date valide");
			}
		}//finsi
		else {
			//Si Jour < 1 ou Jour > 28 Alors
			if ($iJour < 1 || $iJour > 28) {
				//Ecrire "Date Invalide"
				$sMessage = ("PHP Date invalide");
			}
			else {
				//Ecrire "Date Valide"
				$sMessage = ("PHP Date valide");
			}
		}
	}//finsi
	//SinonSi Mois = 4 ou Mois = 6 ou Mois = 9 ou Mois = 11 Alors
	else if ($iMois == 4 || $iMois == 6 || $iMois == 9 || $iMois == 11) {
		//Si Jour < 1 ou Jour > 30 Alors
		if ($iJour < 1 || $iJour > 30) {
			//Ecrire "Date Invalide"
			$sMessage = ("PHP Date invalide");
		}
		else {
			//Ecrire "Date Valide"
			$sMessage = ("PHP Date valide");
		}

	}//sinon
	else {
		//Si Jour < 1 ou Jour > 31 Alors
		if ($iJour < 1 || $iJour > 31) {
			//Ecrire "Date Invalide"
			$sMessage = ("PHP Date invalide");
		}
		else {
			// Ecrire "Date Valide"
			$sMessage = ("PHP Date valide");
		}//finsi
	}//finsi
}
	
	require "exo_8.html";

?>

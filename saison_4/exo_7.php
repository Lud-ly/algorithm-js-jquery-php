<?php

$sMessage= "";
if ((isset($_POST["iAgeUtilisateur"])) && (!(empty($_POST["iAgeUtilisateur"]))))
{
	//Ecrire "Entrez l’âge: "
	//Lire age
	$age = $_POST["iAgeUtilisateur"];
	//Ecrire "Entrez le nombre d'années de permis: "
	//Lire perm
	$perm = $_POST["iPermUtilisateur"];
	//Ecrire "Entrez le nombre d'accidents: "
	//Lire acc
	$acc  = $_POST["iAccUtilisateur"];
	//Ecrire "Entrez le nombre d'années d'assurance: "
	//Lire assur
	$assur = $_POST["iAssurUtilisateur"];

	//cas n°1 age superieur à 25
	 $cas1 = $age >= 25;
	//cas n°2 permis superieur à 2 ans
	$cas2 = $perm >= 2;
	//cas n°3 nombre d'années d'assurance supeieur a 5
	$cas3 = $assur > 5;
	//Si cas1=false Alors
	//pointContrat ← pointContrat + 1
	if ($cas1 == false) {
		$pointContrat += 1;
	}
	//Si cas2 = false 
	//pointContrat ← pointContrat + 1
	if ($cas2 == false) {
		$pointContrat += 1;
	}
	//pointContrat = pointContrat + accident
	$pointContrat = $pointContrat + $acc;
	//si (pointContrat < 3 && cas3)alors
	if ($pointContrat < 3 && $cas3) {
		//pointContrat -1
		$pointContrat -= 1;
	}
	  //si (pointContrat == -1)alors
	if ($pointContrat == -1) {
		//situation contart bleu
		$situation = "Contrat Bleu";
	}
	//sinonsi (pointContrat == 0)alors
	else if ($pointContrat == 0) {
		  //situation contart vert
		$situation = "Contrat Vert";
	} 
	 //sinonsi(pointContrat == 1 )alors
	else if ($pointContrat == 1) {
		  //situation contart Orange
		$situation = "Contrat Orange";
	}
	//sinonsi (pointContrat == 2)alors
	else if ($pointContrat == 2) {
		//situation contart Rouge
		$situation = "Contrat Rouge";
	}
	//sinon
	else {
		//situation refusé
		$situation = "Contrat Refusé";
	}
	//ecrire "Votre situation est : " + situation
	$sMessage = ("PHP Votre situation est : " . $situation);
}
	
	require "exo_7.html";

?>

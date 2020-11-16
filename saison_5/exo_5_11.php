<?php

$sMessage= "";
$sMessage2= "";
//Variables nbChevauxPart, nbChevauxJoue, i, ordre, desordre en Numérique
// SI $_POST["nbChevauxPart"] EXISTE ET QUE $_POST["nbChevauxPart"] N EST PAS VIDE ALORS
if ((isset($_POST["nbChevauxPart"])) && (!(empty($_POST["nbChevauxPart"]))))
{
	$ordre=1;
	$desOrdre=1;
	// Debut
	//  Ecrire "Entrez le nombre de chevaux partants : "
	//Lire nbChevauxPart
	$nbChevauxPart = $_POST["nbChevauxPart"];

	//Ecrire "Entrez le nombre de chevaux joués : "
	// Lire nbChevauxJoue
	$nbChevauxJoue = $_POST["nbChevauxJoue"];

	//Pour i ← 1 à nbChevauxJoue
	for ($i = 1; $i <= $nbChevauxJoue; $i++) {
		$ordre = $ordre * ($i + $nbChevauxPart - $nbChevauxJoue);
		$desOrdre = $desOrdre * $i;
	}// i Suivant

	//Ecrire "Dans l’ordre, une chance sur ", ordre
	//Ecrire "Dans le désordre, une chance sur ", ordre / desordre
	$sMessage = "PHP Dans l’ordre, une chance sur " . $ordre;
	$sMessage2 = "Dans le désordre, une chance sur " . $ordre / $desOrdre;
}//Fin 
	
	require "exo_5_11.html";

?>

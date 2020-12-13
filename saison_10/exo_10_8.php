<?php

// Structure Bottin
// Nom en Caractère * 20
// Prénom en Caractère * 15
// Tel en caractère * 10
// Mail en Caractère * 20
// Fin Structure
// Tableau Mespotes() en Bottin
// Variable MonPote en Bottin
// Variables i, j en Numérique
// Debut
//     Ouvrir "Adresse.txt" sur 1 pour Lecture
//     i ← -1
//     Tantque Non EOF(1)
//         LireFichier 1, MonPote
//         nb ← 0
//         Pour i ← 1 à Len(MonPote.Mail)
//             Si Mid(MonPote.Mail, i, 1) = "@" Alors
//             nb ← nb + 1
//             FinSi
//         i suivant
//         Si nb = 1 Alors
//             i ← i + 1
//             Redim MesPotes(i)
//             MesPotes(i) ← MonPote
//         FinSi
//     FinTantQue
//     Fermer 1
//     Ouvrir "Adresse.txt" sur 1 pour Ecriture
//     Pour j ← 0 à i
//         EcrireFichier 1, MesPotes(j)
//     j Suivant
//     Fermer 1
// Fin
$sTextFinal= "";
$sMessage="";
// // SI $_POST["valPhp"] EXISTE ET QUE $_POST["valPhp"] N EST PAS VIDE ALORS
if ((!(empty($_GET["sNomAncien"]))))
{
 $sNomAncien= str_pad($_GET["sNomAncien"], 20, " ");
 $sNouveauNom= str_pad($_GET["sNouveauNom"], 20, " ");
var_dump($sNouveauNom);
$i= 0;
$bDone= 0;
$aOfMesPersonnes= [];
$aOfLigneFichier= [];

$myUsers = fopen('MesPotes.txt','r');

if ($myUsers)
{
	$trouve=false;
	/*Tant que l'on est pas à la fin du fichier*/
	// TantQue non EOF (19)
	while (!feof($myUsers))
	{
		/*On lit la ligne courante*/
		// LireFichier 19, ligne_personne
		$buffer = fgets($myUsers);
		if (strlen($buffer) > 3)	{
			$aOfLigneFichier["nom"]= substr($buffer, 0, 20);
			$aOfLigneFichier["NomAncien"]= substr($buffer, 0, 20);
			$aOfLigneFichier["NouveauNom"]= substr($buffer, 0, 20);
			
			// Dois je insérer ici ?
			
			// Mespersonnes(i)= ligne_personne
			$aOfMesPersonnes[$i]["sNom"]= $aOfLigneFichier["nom"];
			//$aOfMesPersonnes[$i]["sNouveauNom"]= $aOfLigneFichier["nouveauNom"];
			$i++;
		}
		
	}
	if(($aOfLigneFichier[$i]["sNom"])==($aOfLigneFichier[$i]["sNomAncien"])){
			
		$aOfMesPersonnes[$i]["sNom"]=$sNouveauNom;
		$aOfLigneFichier["nom"]=$aOfLigneFichier["sNom"];
		$i++;
	}
	$trouve=true;
	/*On ferme le fichier*/
	fclose($myUsers);
}
$i--;
// enlever l'indice de crée :


// dans le cas où je n'ai pas pu insérer (dernier elément du carnet)
// SI (bDone == 0) ALORS
if ($bDone == 0)	{
	// Redim Mespersonnes(i)
	// Mespersonnes(i)= saisiepersonne
	$i++;
	$aOfMesPersonnes[$i]["sNom"]= $sNom;
	
	$bDone= 1;
}

// Ecrire mon nouveau contenu dans carnet
// Ouvrir "MesPotes.txt" sur 19 pour Ecriture


for ($i= 0; $i<count($aOfMesPersonnes); $i++)	{
	$sTextFinal.= $aOfMesPersonnes[$i]["sNom"] . " \n ";
}
$myUsers = fopen('MesPotes.txt', 'w');

if ($myUsers)	{
	fputs($myUsers, $sTextFinal);
	fclose($myUsers);
}

// Si Trouvé Alors
if($trouve==true){
//         Ecrire "Modification effectuée"
$sMessage="Modification effectuée";
}
//Sinon
else{
// Ecrire "Nom inconnu. Aucune modification effectuée"
$sMessage="Nom inconnu. Aucune modification effectuée";
//     FinSi
}


		
 }		
	require "exo_10_8.html";

?>
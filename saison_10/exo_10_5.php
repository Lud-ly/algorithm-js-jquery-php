<?php



$sNom="";$sPrenom="";$sTel="";$sMail="";
// Structure Bottin
// Nom en Caractère * 20
// Prénom en Caractère * 15
// Tel en caractère * 10
// Mail en Caractère * 20
// Fin Structure
$sNom= str_pad($_GET["sNom"], 20, " ");
$sPrenom= str_pad($_GET["sPrenom"], 20, " ");
$sTel= str_pad($_GET["sTel"], 10, " ");
$sMail= str_pad($_GET["sMail"], 20, " ");

// Tableau Mespotes() en Bottin
// Variables MonPote en Bottin
// Variables Ancien, Nouveau en Caractère*20
// Variables i, j en Numérique
// Variable Trouvé en Booléen
$i= 0;
$j= 0;
$sAncien="";
$sNouveau="";
$aMespotes= [];
$aOfLigneFichier= [];
$trouvé=false;
// Debut
//     Ecrire "Entrez le nom à modifier : "
//     Lire Ancien
//     Ecrire "Entrez le nouveau nom : "
//     Lire Nouveau
//     Ouvrir “Adresse.txt” sur 1 pour Lecture
//     i ← -1
//     Trouvé ← Faux
//     Tantque Non EOF(1)
//         i ← i + 1
//         Redim MesPotes(i)
//LireFichier 1, MonPote       
//         Si MonPote.Nom = Ancien.Nom Alors
//             Trouvé ← Vrai
//             MonPote.Nom ← Nouveau
//         FinSi
//         MesPotes(i) ← MonPote
//     FinTantQue
//     Fermer 1
//     Ouvrir "Adresse.txt" sur 1 pour Ecriture
//     Pour j ← 0 à i
//         EcrireFichier 1, MesPotes(j)
//     j Suivant
//     Fermer 1
//     Si Trouvé Alors
//         Ecrire "Modification effectuée"
//     Sinon
//         Ecrire "Nom inconnu. Aucune modification effectuée"
//     FinSi
// Fin
	
	require "exo_10_5.html";

?>

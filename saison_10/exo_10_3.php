<?php
//$sMessage="";
	// ALGORITHME Exo_10_4
// On récupère les données

$sNom= str_pad($_GET["sNom"], 20, " ");
$sPrenom= str_pad($_GET["sPrenom"], 20, " ");
$sTel= str_pad($_GET["sTel"], 10, " ");
$sMail= str_pad($_GET["sMail"], 20, " ");

// Lire mon carnet pour :
//				- récupérer son contenu
//				- regarder où insérer mes nouvelles données
//				- Raison : ordre alphabétique

$i= 0;
$bDone= 0;
$aOfMesPersonnes= [];
$aOfLigneFichier= [];
/*Ouverture du fichier en lecture seule*/
// Ouvrir "Carnet.txt" sur 19 pour Lecture
$handle = fopen('Carnet.txt', 'r');
/*Si on a réussi à ouvrir le fichier*/
if ($handle)
{
	/*Tant que l'on est pas à la fin du fichier*/
	// TantQue non EOF (19)
	while (!feof($handle))
	{
		/*On lit la ligne courante*/
		// LireFichier 19, ligne_personne
		$buffer = fgets($handle);
		if (strlen($buffer) > 3)	{
			$aOfLigneFichier["nom"]= substr($buffer, 0, 20);
			$aOfLigneFichier["prenom"]= substr($buffer, 20, 20);
			$aOfLigneFichier["tel"]= substr($buffer, 40, 10);
			$aOfLigneFichier["mail"]= substr($buffer, 50, 30);
			// Dois je insérer ici ?
			// SI (fonction_minuscule_sans_accent(saisiepersonne.sNom) < fonction_minuscule_sans_accent(ligne_personne.sNom)) ET (bDone == 0) ALORS
			if ((strtolower($sNom) < strtolower($aOfLigneFichier["nom"])) && ($bDone == 0))	{
				// Mespersonnes(i)= saisiepersonne
				$aOfMesPersonnes[$i]["sNom"]= $sNom;
				$aOfMesPersonnes[$i]["sPrenom"]= $sPrenom;
				$aOfMesPersonnes[$i]["sTel"]= $sTel;
				$aOfMesPersonnes[$i]["sMail"]= $sMail;
				$i++;
				$bDone= 1;
			}
			// Mespersonnes(i)= ligne_personne
			$aOfMesPersonnes[$i]["sNom"]= $aOfLigneFichier["nom"];
			$aOfMesPersonnes[$i]["sPrenom"]= $aOfLigneFichier["prenom"];
			$aOfMesPersonnes[$i]["sTel"]= $aOfLigneFichier["tel"];
			$aOfMesPersonnes[$i]["sMail"]= $aOfLigneFichier["mail"];
			$i++;
		}
	}
	/*On ferme le fichier*/
	fclose($handle);
}
// enlever l'indice de crée :
$i--;

// dans le cas où je n'ai pas pu insérer (dernier elément du carnet)
// SI (bDone == 0) ALORS
if ($bDone == 0)	{
	// Redim Mespersonnes(i)
	// Mespersonnes(i)= saisiepersonne
	$i++;
	$aOfMesPersonnes[$i]["sNom"]= $sNom;
	$aOfMesPersonnes[$i]["sPrenom"]= $sPrenom;
	$aOfMesPersonnes[$i]["sTel"]= $sTel;
	$aOfMesPersonnes[$i]["sMail"]= $sMail;
	$bDone= 1;
}

// Ecrire mon nouveau contenu dans carnet
// Ouvrir "Carnet.txt" sur 19 pour Ecriture
$sTextFinal= "";
for ($i= 0; $i<count($aOfMesPersonnes); $i++)	{
	$sTextFinal.= $aOfMesPersonnes[$i]["sNom"] . $aOfMesPersonnes[$i]["sPrenom"] . $aOfMesPersonnes[$i]["sTel"] . $aOfMesPersonnes[$i]["sMail"] . "\n";
}

$handle = fopen('Carnet.txt', 'w');
if ($handle)	{
	fputs($handle, $sTextFinal);
	fclose($handle);
}

//echo $sTextFinal;
	
	require "exo_10_3.html";

?>

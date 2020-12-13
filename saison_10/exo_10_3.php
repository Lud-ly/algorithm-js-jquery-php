<?php
$sNom= str_pad($_GET["sNom"], 20, " ");

$i= 0;
$bDone= 0;
$aOfMesPersonnes= [];
$aOfLigneFichier= [];

$myUsers = fopen('Users.txt','r');
if ($myUsers)
{
	/*Tant que l'on est pas à la fin du fichier*/
	// TantQue non EOF (19)
	while (!feof($myUsers))
	{
		/*On lit la ligne courante*/
		// LireFichier 19, ligne_personne
		$buffer = fgets($myUsers);
		if (strlen($buffer) > 3)	{
			$aOfLigneFichier["nom"]= substr($buffer, 0, 20);
			// Dois je insérer ici ?
			// SI (fonction_minuscule_sans_accent(saisiepersonne.sNom) < fonction_minuscule_sans_accent(ligne_personne.sNom)) ET (bDone == 0) ALORS
			if ((strtolower($sNom) < strtolower($aOfLigneFichier["nom"])) && ($bDone == 0))	{
				// Mespersonnes(i)= saisiepersonne
				$aOfMesPersonnes[$i]["sNom"]= $sNom;
				$i++;
				$bDone= 1;
			}
			// Mespersonnes(i)= ligne_personne
			$aOfMesPersonnes[$i]["sNom"]= $aOfLigneFichier["nom"];
			$i++;
		}
	}
}
fclose($myUsers);
// Ecrire mon nouveau contenu dans carnet
// Ouvrir "Carnet.txt" sur 19 pour Ecriture
$sTextFinal= "";
for ($i= 0; $i<count($aOfMesPersonnes); $i++)	{
	$sTextFinal.= $aOfMesPersonnes[$i]["sNom"] . "\n";
}

$myUsers = fopen('Users.txt', 'w');
if ($myUsers)	{
	fputs($myUsers, $sTextFinal);
	fclose($myUsers);
}
	
	require "exo_10_3.html";

?>

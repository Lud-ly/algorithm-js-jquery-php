<?php
// // SI $_POST["valPhp"] EXISTE ET QUE $_POST["valPhp"] N EST PAS VIDE ALORS
// if ((isset($_GET["sNomAncien"])) && (!(empty($_GET["sNomAncien"]))))
// {
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
			if(($aOfLigneFichier[$i]["sNom"])==($aOfLigneFichier[$i]["sNomAncien"])){
				
				$aOfMesPersonnes[$i]["sNom"]=$sNouveauNom;
				$i++;
			}
			$trouve=true;
			// Mespersonnes(i)= ligne_personne
			$aOfMesPersonnes[$i]["sNom"]= $aOfLigneFichier["nom"];
			//$aOfMesPersonnes[$i]["sNouveauNom"]= $aOfLigneFichier["nouveauNom"];
			$i++;
		}
	}
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
$sTextFinal= "";

for ($i= 0; $i<count($aOfMesPersonnes); $i++)	{
	$sTextFinal.= $aOfMesPersonnes[$i]["sNom"] . " \n ";
}
$myUsers = fopen('MesPotes.txt', 'w');

if ($myUsers)	{
	fputs($myUsers, $sTextFinal);
	fclose($myUsers);
}
$sMessage="";
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


		
// }	
	require "exo_10_5.html";

?>

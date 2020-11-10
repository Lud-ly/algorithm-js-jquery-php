<?php
//Variables Tableau Notes(8),sMessage en caractère
$sMessage="";
$iTab=array(9);

// SI $_POST["div_resultat_js"] EXISTE ET QUE $_POST["div_resultat_js"] N EST PAS VIDE ALORS
if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
{
  //Ecrire Entrer les notes 
  //Lire iTab
  $iTab = explode(" ",$_POST["iNombreUtilisateur"]);
  //Ecrire Voici les Notes
  $sMessage .= "Voici les notes  : " . implode("," ,$iTab);
}  
	require "exo_6_3.html";

?>
  
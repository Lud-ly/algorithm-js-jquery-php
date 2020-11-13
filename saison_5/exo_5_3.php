<?php

$sMessage= "";
// SI $_POST["iRepUtilisateur"] EXISTE ET QUE $_POST["iRepUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
{
  $chain="";
  //DEBUT
  //Variable iNum en numerique
  //Variable chain en caractère
  $iNum = $_POST["iNombreUtilisateur"];
  // variable iNum_suivants en numerique
  $iNum_suivants = $iNum + 10;
  // Ecrire "Les 10 nombres suivants sont : "
  $sHTML = "Les 10 prochains nombres sont : ";
  // Tant que iNum < iNum_suivants
  while ($iNum < $iNum_suivants) {
    //iNum = iNum + 1
    $iNum = $iNum + 1;
    //chain = chain + espace + iNum
    $chain = $chain . " ". $iNum;
    //si inum < iNum_suivants
    if($iNum <$iNum_suivants){
    //chain = chain + ";"
    $chain = $chain . ",";
    }//finsi
  } //Fin Tant que
  $sMessage= "BRAVO PHP :  ". $sHTML . $chain;
   
} //FIN
	require "exo_5_3.html";

?>
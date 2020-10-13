<?php
$sMessage= "";
// SI $_POST["iRepUtilisateur"] EXISTE ET QUE $_POST["iRepUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iNombreUtilisateur"])) && (!(empty($_POST["iNombreUtilisateur"]))))
{
    //DEBUT
    //Variable iNum en numerique
    $iNum = $_POST["iNombreUtilisateur"];
    // variable iNum_suivants en numerique
    $iNum_suivants = $iNum + 10;
    // Ecrire "Les 10 nombres suivants sont : "
     $sHTML = "Les 10 prochains nombres sont : ";
    // Tant que iNum < iNum_suivants
    while ($iNum < $iNum_suivants) {
        $sHTML += " " + ($iNum + 1) + " ";
        $iNum = $iNum + 1;
        //Fin Tant que
    }
  $sMessage= "PHP " . $sHTML;
    //FIN
}

	require "exo_3.html";

?>
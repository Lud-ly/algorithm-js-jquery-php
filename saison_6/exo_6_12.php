<?php
$sMessage = "";
$sMessage2 = "";
$sMessage3 = "";

$i = 1;
$iT = [];
// SI $_POST["myPhp"] EXISTE ET QUE $_POST["myPhp"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
{
    //Variables Tableau iT() ,i en Numérique  
    // Variables Nb, Nbpos, Nbneg en Numérique
    $Nbpos = 0;
    $Nbneg = 0;
    // Lire T(value)
    // Ecrire "Entrez le nombre de valeurs :"
    //  Lire Nb
    $iNb = (int)$_POST["myPhp"];
    //nb = longueur de T 
    $iNb = count($iT);
    //Enter les notes dans le Tableau iT
    $iT = explode(" " ,$_POST["myValuePhp"]);
    // $sMessage2 = $T.join(" , ");
    $sMessage .= ("PHP Voici les Valeurs : " . implode("," ,$iT));
    //Pour i à longueur du Tableau iT
    for($i=0;$i<count($iT);$i++){
        //iT[i] = iT[i]+1
       $iT[$i] = $iT[$i] + 1;
    }
    //Pacourir toutes les valeurs de iT
    foreach($iT as $val) {
        //Si val<0 alors
        if ($val < 0) {
            // Nbneg = Nbneg + 1
            $Nbneg++;
        } //FinSi
        else {
            // Nbpos = Nbpos + 1
            $Nbpos++;
        }
    }
        
    // Ecrire "Nombre de valeurs positives : ", Nbpos                           
    //Ecrire "Nombre de valeurs négatives : ", Nbneg 
    $sMessage2 = ("Nombre de valeurs positives : " . $Nbpos . "<br/>" . " Nombre de valeurs négatives : " . $Nbneg);
    $sMessage3 .= ("PHP Voici les Nouvelles Valeurs : " . implode("," ,$iT));
}// Fin          

	require "exo_6_12.html";

?>
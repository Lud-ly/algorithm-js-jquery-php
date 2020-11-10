<?php
$sMessage = "";
$sMessage2 = "";

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
    $sMessage2 = ("Nombre de valeurs positives : " . $Nbpos . " Nombre de valeurs négatives : " . $Nbneg);

}// Fin          

	require "exo_6_8.html";

?>
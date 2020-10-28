<?php

$sMessage = "";
$sMessage2 = "";
$sMessage3 = "";
$sMessage4 = "";

$i = 1;
$T = [];

    // Variables Nb, Nbpos, Nbneg en Numérique
    //Variables global Tableau T() ,i en Numérique
    $Nbpos = 0;
    $Nbneg = 0;
    //  Ecrire "Entrez le nombre n° ", i + 1 
    // Lire T(value)
   $sMessage = ("Entrer la notes n°" . $i++);
    $nb = $_POST["myPhp"];
    //T.push(parseInt(document.getElementById("nombreP").value));
    // Ecrire "Entrez le nombre de valeurs :"
    //  Lire Nb
    $valeur =$_POST["myValuePhp"];
    $T[$i] += $valeur;
    var_dump($T[$i]);
    //Si nb = longueur de T alors
    if ($nb <= count($T)) {
        //Ecrire Notes

      // $sMessage2 = $T.join(" , ");
       $sMessage3 = ("PHP Voici les Valeurs : " . $T[$i]);
    }//FinSi
    //pacourir valeur de T
  foreach($T as $valeur) {
        //Si val<0 alors
        if ($valeur < 0) {
            // Nbneg = Nbneg + 1
            $Nbneg++;
        } else {
            // Nbpos = Nbpos + 1
            $Nbpos++;
        }
    }
    //Finsi
    // Ecrire "Nombre de valeurs positives : ", Nbpos                           
    //Ecrire "Nombre de valeurs négatives : ", Nbneg 
   $sMessage4 = ("Nombre de valeurs positives : " . $Nbpos . " Nombre de valeurs négatives : " . $Nbneg);
// }// Fin          

	
	require "exo_6_8.html";

?>
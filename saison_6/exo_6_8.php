<?php
  if(isset($_SESSION['T'])){
  unset($_SESSION['T']);
  } 
session_start();
$sMessage = "";
$sMessage2 = "";
$sMessage3 = "";
$sMessage4 = "";

$i = 1;
$T = [];
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
      
    // Variables Nb, Nbpos, Nbneg en Numérique
    //Variables global Tableau T() ,i en Numérique
    $Nbpos = 0;
    $Nbneg = 0;
    //  Ecrire "Entrez le nombre n° ", i + 1 
    // Lire T(value)
   
    $nb = (int)$_POST["myPhp"];
    //T.push(parseInt(document.getElementById("nombreP").value));
    // Ecrire "Entrez le nombre de valeurs :"
    //  Lire Nb
    $valeur =(int)$_POST["myValuePhp"];
    $_SESSION["T"][]=$valeur;
      
   $sMessage = ("Entrer la notes n°" . $i++);
    //$T[$i] += $valeur;
    var_dump($_SESSION["T"]);
    //Si nb = longueur de T alors
    if ($nb <= count($_SESSION["T"])) {
        //Ecrire Notes

      // $sMessage2 = $T.join(" , ");
       $sMessage3 = ("PHP Voici les Valeurs : " . $T);
    }//FinSi
    //pacourir valeur de T
  foreach($_SESSION["T"] as $valeur) {
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
 }// Fin          

	require "exo_6_8.html";

?>
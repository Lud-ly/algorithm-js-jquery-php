<?php

$sMessage="";
$sMessage2="";
$sMessage3="";

    $i = 2;
    $T = array();
    $nb=0;
    $valeur=0;
    // SI $_POST["myPhp"] EXISTE ET QUE $_POST["myPhp"] N EST PAS VIDE ALORS
	//if ((isset($_POST["myPhp"])) && ((!empty($_POST["myPhp"]))))
	//{
        $Nbpos = 0;
        $Nbneg = 0;
       $sMessage = ("Entrer la notes n°" . $i++);
      
       $valeur= $_POST["myPhp"];
       array_push($T,$valeur);
       $nb =  $_POST["myValuePhp"];
       if($nb == count($T)){
            $sMessage2= "T". $T;
       }
    
     // foreach($T as $valeur){
        if ($valeur < 0) {
            // Nbneg = Nbneg + 1
            $Nbneg++;
        } else {
            // Nbpos = Nbpos + 1
            $Nbpos++;
        }
      // }
       $sMessage3= ("Nombre de valeurs positives : " . $Nbpos . " Nombre de valeurs négatives : " . $Nbneg);
    //}
	
	require "exo_6_8.html";

?>
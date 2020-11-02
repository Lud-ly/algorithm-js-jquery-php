<?php
$sMessage= "";
$sMessage2= "";
$sMessage3= "";
//Début
	// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
	if ((isset($_POST["soldPhp"])) && (!(empty($_POST["soldPhp"]))))
	 {
    //tab result en Numérique
$results = [];
//Pour i de 0 à 100
//Generer 100 nombres de 0 à 100
for ( $i = 0; $i<=100; $i++ ) {
    (int)$nbrAlea = rand(1,100);
    //Ajouter dans array
    $results = $results . $nbrAlea . " , " ; 
}
//Si result[i]>result[i+1]
if($results[$i]>$results[$i+1]){
    //Ecrire Consecutif
   $sMessage = ("php consecutif");
   }
   //Sinon pas Consecutif
   else{
   $sMessage2 =("php Pas consecutif");
   }
   //Ecrire results
  $sMessage3 =($results);  
 }
	
	require "exo_6_16.html";

?>

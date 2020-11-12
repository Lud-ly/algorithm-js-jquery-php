<?php
$sMessage= "";
$sMessage2= "";
$sMessage3= "";
//Début
	// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
	if ((isset($_POST["myPhp"])) && ((empty($_POST["myPhp"]))))
	 {
    //tab result en Numérique
$results = [];
//Pour i de 0 à 100
//Generer 100 nombres de 0 à 100
for ( $i = 0; $i<=10; $i++ ) {
    (int)$nbrAlea = rand(1,100);
    //Ajouter dans array
    $results[$i] = $nbrAlea; 
}
    //Si result[i]>result[i+1]
    if($i<$i+1){
        //Ecrire Consecutif
    $sMessage = ("php Les nombres ne sont pas consecutif ");
    }
    //Sinon pas Consecutif
    else{
    $sMessage2 =("php les nombres sont consecutif ");
    }
    //Ecrire results
    $sMessage3 = implode("," ,$results);  
    
}	
	require "exo_6_16.html";

?>

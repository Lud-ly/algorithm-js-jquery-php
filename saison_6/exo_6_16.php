<?php
$sMessage= "";
$sMessage2= "";
$sMessage3= "";
//Début
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
{
    //Variable Tableau result en Numérique
    //Variables i en Numérique
    $results =  explode(" " ,$_POST["myPhp"]);

    //Pour i de 0 à longueur de result
    for ( $i = 0; $i<count($results); $i++ ) {
        //Ajouter dans array
        //$results[$i] = $nbrAlea; 
        //Si i>=1 alors
        if($i>1){
            //Si result[i]>result[i+1]
            if($results[$i]==($results[$i-1]+1)){
                //Ecrire Consecutif
                $sMessage = ("php Les nombres sont consecutif ");
            }//Sinon
            else{
                //Ecrire pas Consecutif
                $sMessage2 =("php les nombres ne sont pas tous consecutif ");
            }
        }//FinSi
    }//i suivant
    //Ecrire Tab result  
    $sMessage3 = implode("," ,$results); 
}//fin	
	require "exo_6_16.html";

?>

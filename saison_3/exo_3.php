<?php
	
	$sMessage= "";
	if ((isset($_POST["sNom"])) && (!(empty($_POST["sNom"]))))
			{
				  //sNom,sNom2,sNom3 en string
				   //Début
                //Ecrire "entrez 3 noms" 
                //ecrire"donnez le nom n°1 
                //ecrire "donnez le nom n°2 
                //ecrire"donnez le nom n°3 
                //lire sNom,sNom2,sNom3
                $sNom = $_POST["sNom"];
                $sNom2 = $_POST["sNom2"];
				$sNom3 = $_POST["sNom3"];
				 //Si sNom < sNom2 ET sNom2 < sNom3 Alors 
                if (($sNom < $sNom2) && ($sNom2 < $sNom3)) {
					$sMessage= "Bravo PHP Ces noms sont classés alphabétiquement !";
				}
				 //Sinon 
                //Ecrire "Ces noms ne sont pas classés" 
                else {
					$sMessage= "Désolé PHP Ces noms ne sont pas classés !";
                }//FinSi
			}//Fin
		
	require "exo_3.html";

?>

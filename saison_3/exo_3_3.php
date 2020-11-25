<?php
	
	$sMessage= "";
	if ((isset($_POST["sNom"])) && (!(empty($_POST["sNom"]))))
			{
				//sNom,sNom2,sNom3 en string
				//Début
                //Ecrire "entrez 3 noms" 
                //Ecrire"donnez le nom n°1 
                //Ecrire "donnez le nom n°2 
                //Ecrire"donnez le nom n°3 
                //Lire sNom,sNom2,sNom3
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
		
	require "exo_3_3.html";

?>

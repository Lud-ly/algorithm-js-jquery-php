<?php

$sMessage= "";
// SI $_POST["iNombreUtilisateur"] EXISTE ET QUE $_POST["iNombreUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iAgeUtilisateur"])) && (!(empty($_POST["iAgeUtilisateur"]))))
{
	//age en Numérique
    // sexe en string
	//inutile php

	// début
	// Ecrire "Entrez votre age de Toon:
	//lire age
	$age = $_POST["iAgeUtilisateur"];
	 //Ecrire "Entrez votre sexe homme/femme :
    //lire sexe
	$sexe = $_POST["sSexeUtilisateur"];
	 // si sexe=="homme" && age inferieur 20 alors
	if ($sexe == "homme" && $age < 20) {
		 //ecrire "Cher Mr Toon, vous n'êtes pas imposable
		$sMessage=("Bravo PHP Cher Toon, vous n'êtes pas imposable");
	}
	  //sinonsi sexe == "homme" && age > 20 alors
	else if ($sexe == "homme" && $age > 20) {
		 // ecrire "Vous êtes imposable cher Toon,payer!
		$sMessage=("Bravo PHP Vous êtes imposable cher Toon, payer ! ");
	}
	 //si (sexe == "femme" && age < 18 || age > 35) 
	if ($sexe == "femme" && $age < 18 || $age > 35) {
		 //ecrire "Chère Toone,vous n'êtes pas imposable"
	$sMessage = ("Bravo PHP Chère Toon,vous n'êtes pas imposable");
	}
	 //sinonsi sexe == "femme" && age > 18 || age < 35
	else if ($sexe == "femme" && $age > 18 || $age < 35) {
		 //ecrire "Vous êtes imposable cher Toone,banquer!
	$sMessage = ("Bravo PHP Vous êtes imposable cher Toon,banquer!");
	}//fin sinonsi
}//fin
	
	require "exo_4_5.html";

?>
 
              
               
              
               
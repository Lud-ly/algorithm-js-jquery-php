<?php

$sMessage= "";
	
// SI $_POST["iAgeUtilisateur"] EXISTE ET QUE $_POST["iAgeUtilisateur"] N EST PAS VIDE ALORS
if ((isset($_POST["iAgeUtilisateur"])) && (!(empty($_POST["iAgeUtilisateur"]))))
{
	 //Variable age en Entier
	 // Début
	//Ecrire "Entrez l’âge de l’enfant : "
    //Lire age
	$iAgeUtilisateur= $_POST["iAgeUtilisateur"];
	
	  // Si age >= 20 Alors
	if ($iAgeUtilisateur >= 20) {
		//Ecrire "Catégorie old Man"
		$sMessage="Bravo PHP Catégorie old Man !";
	}
	// Sinonsi age >= 12 Alors
	else if ($iAgeUtilisateur >= 12) {
		//Ecrire "Catégorie Cadet"
		$sMessage="Bravo PHP Catégorie Cadet !";
	}
	// Sinonsi age >= 10 Alors
	else if ($iAgeUtilisateur >= 10) {
		//Ecrire "Catégorie Minime"
		$sMessage="Bravo PHP Catégorie Minime !";
	}
	// Sinonsi age >= 8 Alors
	else if ($iAgeUtilisateur >= 8) {
		//Ecrire "Catégorie Pupille"
		$sMessage="Bravo PHP Catégorie Pupille !";
	}
	// Sinonsi age >= 6 Alors
	else if ($iAgeUtilisateur >= 6) {
		//Ecrire "Catégorie Poussin"
		$sMessage="Bravo PHP Catégorie Poussin !";
	}
}  
	require "exo_6.html";
?>

                                           
                                           
                                            
                                          
                            
                                        
<?php


$sMessage="";

// SI $_POST["div_resultat_js"] EXISTE ET QUE $_POST["div_resultat_js"] N EST PAS VIDE ALORS
	//if ((isset($_POST["div_resultat_js"])) && ((!empty($_POST["div_resultat_js"]))))
	//{

//Variables sAphbLatin = ["A", "E", "i", "O", "U", "Y"]
 //Variables voyelles =[]
$sAphbLatin = ("A". "E" ."i". "O" . "U" . "Y");
	 //Debut
    //Pour i <= 5
	for ($i = 0; $i <= 5; $i++) {
		  // voyelles = voyelles + "[ " + sAphbLatin[i] + " ]";
		$voyelles = $voyelles . "[ " . 	$sAphbLatin[$i] . " ]";
		
	} 
	 //Ecrire voyelles
	$sMessage= " PHP " . $voyelles;
//Fin
//}
	require "exo_6_2.html";

?>
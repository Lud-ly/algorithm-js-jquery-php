<?php
$sMessage= "";
$sMessage2= "";
$sMessage3= "";

$iNumTab = [];
$i = 2;
$S = 0;
$iNum = 0;
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
 if ((isset($_POST["valPhp"])) && (!(empty($_POST["valPhp"]))))
 {
	
	$iNumTab = explode(" ",$_POST["valPhp"]);
	
	

 // Ecrire "Rang de la valeur à supprimer ?"
 // Lire S
	
	 	$sMessage2 = ("Array elements choose deletion : " . implode("," ,$iNumTab));
	  	$S = $_POST["idPhp"];
  // Pour i ← S à iNumArray-2
	
	  	for ($i = $S; $i < count($iNumTab)-2; $i++) {
     //   iNumArray(i) ← iNumArray(i+1)
			  $iNumTab[$i] = $iNumTab[$i + 1];
			 
	 	} // i suivant
 // Redim iNumArray(N–1)
 count($iNumTab)-1;
	 	$sMessage3 = ("Array elements after deletion : " . implode("," ,$iNumTab)); 
	 
   
}// Fin
	
	require "exo_7_4.html";

?>

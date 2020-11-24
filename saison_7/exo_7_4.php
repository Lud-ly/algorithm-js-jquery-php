<?php
$sMessage= "";
$sMessage2= "";
$sMessage3= "";

$iNumTab = [];
$i = 0;
$aResult = [];
$iPos = 0;
//$iNum = 0;
// SI $_POST["valPhp"] EXISTE ET QUE $_POST["valPhp"] N EST PAS VIDE ALORS
 if ((isset($_POST["valPhp"])) && (!(empty($_POST["valPhp"]))))
 {
	$iNumTab = explode(" ",$_POST["valPhp"]);
	$nbSaisi=$_POST["indicePhp"];
	$sMessage2 = ("Array elements choose deletion : " . implode("," ,$iNumTab));

	// Pour i ← S à iNumArray-2
	for ($i = 0; $i < count($iNumTab); $i++) {
		if($i <> $nbSaisi-1){
			$aResult[$iPos]=$iNumTab[$i];
			$iPos++;
		}
	} // i suivant


	$sMessage3 = ("Array elements after deletion : " . implode("," ,$aResult)); 

}// Fin
	
	require "exo_7_4.html";

?>

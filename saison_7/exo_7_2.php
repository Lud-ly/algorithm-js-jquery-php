<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";

// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["valPhp"])) && (!(empty($_POST["valPhp"]))))
{
$positionMax;
$temp;

	//  var iTab = [];
	$iTab = explode(" ",$_POST["valPhp"]);
	$sMessage = (implode("," ,$iTab));
	for ($i = 0; $i <= count($iTab) - 2; $i++) {
		$positionMax = $i;
		for ($j = $i + 1; $j <=  count($iTab) - 1; $j++) {
			if ($iTab[$j] > $iTab[$positionMax]) {
				$positionMax = $j;
			}
		}
		$temp = $iTab[$positionMax];
		$iTab[$positionMax] = $iTab[$i];
		$iTab[$i] = $temp;
	}

	$sMessage2 = ("Mon tableau tri par insertion : ");
	$sMessage3 = (implode("," ,$iTab));
}// FIN
	
	require "exo_7_2.html";

?>

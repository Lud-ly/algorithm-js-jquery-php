<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";

//SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
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

// $k = 2;
//    // SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
// if ((isset($_POST["valPhp"])) && (!(empty($_POST["valPhp"]))))
// {
//         //  var iTab = [];
// 		$iTab = explode(" ",$_POST["valPhp"]);
// 		$sMessage = (implode("," ,$iTab));
//         $Permute = true;
//         // TantQue Permute
//         while ($Permute) {
//             $Permute = false;
//             // Pour i = 0 à 6
//             for ($i = 0; $i < count($iTab); $i++) {
//                 // Si aTableau[i] > aTableau[i+1] alors

//                 if ($iTab[$i] > $iTab[$i - 1]) {
//                     $temp = $iTab[$i];
//                     $iTab[$i] = $iTab[$i - 1];
//                     $iTab[$i - 1] = $temp;
//                     $Permute = true;
//                } // Finsi
//             } // i suivant
//         }// FinTantQue

//       $sMessage = ("Mon tableau tri à bulles : ");
//       $sMessage2 = (implode("," ,$iTab));
//     }// FIN
	
	require "exo_7_2.html";

?>

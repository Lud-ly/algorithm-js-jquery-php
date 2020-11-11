<?php
$sMessage ="";
$sMessage2 ="";
$sMessage3 ="";
// SI $_POST["myPhp"] EXISTE ET QUE $_POST["myPhp"]  EST VIDE ALORS
if ((isset($_POST["myPhp"])) && ((empty($_POST["myPhp"]))))
{
	//Variables i, N en Numérique
	//Tableaux T1(N), T2(N), T3() en Numérique
	$tab1 = [4, 8, 7, 9, 1, 5, 4, 6];
	$tab2 = [7, 6, 5, 2, 1, 3, 7, 4];
	$tab3 = [];
	//Pour i ← 0 à N - 1
	for ($i = 0; count($tab3) <8; $i++) {
		// T3(i) ← T1(i) + T2(i)
		$tab3[$i] = $tab1[$i] + $tab2[$i];
		// i Suivant
	}// Fin
	$sMessage = "Tab1 : " . implode("," ,$tab1) ;
	$sMessage2 = "Tab2 : " . implode("," ,$tab2);
	$sMessage3 = "PHP Tab3 : " . implode("," ,$tab3);
}
	
	require "exo_6_10.html";

?>

<?php
$sMessage ="";
$sMessage2 ="";
$sMessage3 ="";
// SI $_POST["div_resultat_js"] EXISTE ET QUE $_POST["div_resultat_js"] N EST PAS VIDE ALORS
//	if ((isset($_POST["div_resultat_js"])) && ((!empty($_POST["div_resultat_js"]))))
//	{
	//Variables i, N en Numérique
	//Tableaux T1(N), T2(N), T3() en Numérique
	$tab1 = [4, 8, 7, 9, 1, 5, 4, 6];
	$tab2 = [7, 6, 5, 2, 1, 3, 7, 4];
	$tab3 = [];
	//Pour i ← 0 à N - 1
	for ($i = 0; count($tab3) <8; $i++) {
		// T3(i) ← T1(i) + T2(i)
		$tab3 = $tab1 + $tab2;
		// i Suivant
	}// Fin
	var_dump($tab3);
	//$sMessage = "PHP tab1 : " . $tab1 ;
	//$sMessage2 = "tab2 : " . $tab2;
	$sMessage3 =  $tab3;
//}
	
	require "exo_6_10.html";

?>

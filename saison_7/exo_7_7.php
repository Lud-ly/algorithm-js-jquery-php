<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";

$tab3=array();
$i = 0;
$j = 0;
$k = 0;

$t1 = [1, 3, 5, 7, 9];
$t2 = [2, 4, 6, 8,10];
   
	

	while ($i <= count($t1) && $j <= count($t2)) {
		if ($t1[$i] <= $t2[$j]) {
			$tab3[$k++] = $t1[$i++];
		}
		else{
			$tab3[$k++] = $t2[$j++];
		}
	}
	var_dump($tab3);
	$sMessage = ("Tableau 1 : " . implode("," ,$t1));
	$sMessage2 = ("Tableau 2 : " .  implode("," ,$t2));
	$sMessage3 = ("Tableau 3 trié php: " . implode("," ,$tab3));



// $t1 = [3, 6, 9, 12, 15];
// $t2 = [1, 5, 7, 11, 20];
// $t3 = array();
// $i = 0;
// $j = 0;
// $k = 0;
// // SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"]  EST  VIDE ALORS
// if ((isset($_POST["myVal"])) && ((empty($_POST["myVal"]))))
// {
// 	while ( count($t3)<=10) {
// 	//while($i<count($t1) + $j<count($t2)){
// 		while($t1[$i]<$t2[$j] && $i<>count($t1)){
// 		//if ($t1[$i] < $t2[$j]) {
// 			$t3[$k] = $t1[$i];
// 			$k++;
// 			$i++;
// 		}
// 		while($t2[$j]<$t1[$i]  && $i<>count($t2)){
// 			$t3[$k] = $t2[$j];
// 			$k++;
// 			$j++;
// 		}
// 	}

// 	$sMessage = ("Tableau 1 : " . implode("," ,$t1));
// 	$sMessage2 = ("Tableau 2 : " .  implode("," ,$t2));
// 	$sMessage3 = ("Tableau 3 trié php: " . implode("," ,$t3));
// }
	
	require "exo_7_7.html";

?>

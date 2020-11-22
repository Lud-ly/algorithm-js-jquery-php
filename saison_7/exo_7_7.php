<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";

$t3 = array(9);
$i = 0;
$j = 0;
$k = 0;
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"]  EST  VIDE ALORS
if ((isset($_POST["myVal"])) && ((empty($_POST["myVal"]))))
{
	$t1 = [3, 6, 9, 12, 15];
	$t2 = [1, 5, 7, 11, 20];
	
   

	while ($i <= count($t1) && $j <= count($t2)) {
		if ($i < $j) {
			$t3[$k++] = $t1[$i++];
		}
		else {
			$t3[$k++] = $t2[$j++];
		}
	}

	$sMessage = ("Tableau 1 : " . implode("," ,$t1));
	$sMessage2 = ("Tableau 2 : " .  implode("," ,$t2));
	$sMessage3 = ("Tableau 3 trié php: " . implode("," ,$t3));
}
	
	require "exo_7_7.html";

?>

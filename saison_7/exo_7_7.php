<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";

$t3 = [];
$i = 0;
$j = 0;
$k = 0;
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"]  EST  VIDE ALORS
if ((isset($_POST["myVal"])) && ((empty($_POST["myVal"]))))
{
	$t1 = [1, 3, 5, 7, 9];
	$t2 = [2, 4, 6, 8, 10];
	$m = count($t1);
	$n = count($t2);
	$mn=$m+$n;
	count($t3,$mn);
   

	while ($i < $m && $j < $n) {
		if ($t1[$i] < $t2[$j]) {
			$t3[$k++] = $t1[$i++];
		}
		else {
			$t3[$k++] = $t2[$j++];
		}
	}

	$sMessage = ("Tableau 1 : " . implode("," ,$t1));
	$sMessage2 = ("Tableau 2 : " .  implode("," ,$t2));
	$sMessage3 = ("Tableau 3 : " . implode("," ,$t3));
}
	
	require "exo_7_7.html";

?>

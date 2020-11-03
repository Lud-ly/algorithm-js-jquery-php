<?php
session_start();
	$sMessage= "";
	$sMessage2= "";
	$sMessage3= "";

	$i = 1;
	$j = 1;
	$myTab = [];
	$myVal=0;
	//Début
	// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
	if ((isset($_POST["valPhp"])) && (!(empty($_POST["valPhp"]))))
	 {
	//tab result en Numérique
	
		$tab_length = 10;
		if ($i <= $tab_length) {
		
		$_SESSION["myTab"][$i] = (int)$_POST["valPhp"];
			$_SESSION["myTab"][]= $_SESSION["myTab"][$i];
			$i++;
		}
		$sMessage = ("tab non-trié " . (int)$_SESSION["myTab"]);
		var_dump($_SESSION["myTab"]);
		tri_insertion($_SESSION["myTab"]);
		if ($j <= $tab_length) {
		$sMessage2 = ($_SESSION["myTab"][$j] . ", ");
			$j++;
		}
		$sMessage3 = ("tab trié par insertion " . (int)$_SESSION["myTab"]);
	}

	function tri_insertion($myTab) {
		$valeur;
		$j;

		for ($i = 0; $i < count($_SESSION["myTab"]); $i++) {
			//on prends la valeur à l'index i
			$valeur = $_SESSION["myTab"][$i];
			// index de départ
			$j = $i;
			while ($j > 0 && $_SESSION["myTab"][$j - 1] > $valeur) {
				$_SESSION["myTab"][$j] = $_SESSION["myTab"][$j - 1];
				$j = $j - 1;
				
			}
			
			$_SESSION["myTab"][$j] = $valeur;
		}
	}

	require "exo_6_17.html";

?>

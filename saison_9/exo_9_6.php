<?php
$sMessage="";

// SI $_POST["valPhp"] EXISTE ET QUE $_POST["valPhp"] N EST PAS VIDE ALORS
if ((isset($_POST["myVal"])) && (!(empty($_POST["myVal"]))))
{
	$chain="";
	$chain = $_POST["myVal"];
	$sMessage=("PHP La phrase cryptée : ". Cesar($chain, 1));
}

function Cesar($str, $amount) {
	if ($amount < 0)
		return Cesar($str, $amount + 26);

	// variable pour stocker le résultat
	$res = '';
	$code;
	// Parcourir chaque caractére
	for ($i = 0; $i <strlen($str); $i++) {
		// Récupérer le caractére que nous allons ajouter
		 $c = $str[$i];
		// Vérifier si c'est une lettre
		//if ($c.preg_match('/[a-z]/',$i)) {
			// Récupérer son code
			$code = $str[$i];
			// Lettres majuscules
			if (($code >= 65) && ($code <= 90))
				$c = chr((($code - 65 + $amount) % 26) + 65);
			// Lettres minuscules
			if (($code >= 97) && ($code <= 122))
				$c = chr((($code - 97 + $amount) % 26) + 97);
		//}
		// Ajouter le caractére
		$res = $c;
	}
	// Résultat
	return $res;
};
	
	require "exo_9_6.html";

?>

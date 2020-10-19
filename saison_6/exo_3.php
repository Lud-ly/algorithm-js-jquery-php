<?php
	
$sMessage= "";
$sMessage2= "";

$i = 2;
$notes = [];

if ((isset($_POST["nombreP"])) && (!(empty($_POST["nombreP"]))))
	{
		
			//Variables Tableau Notes(8) ,Notes=[] en Numérique
			// i en Numérique
			// var iTabNotes = [0]
			//var Notes=[];
			$iTabNotes = [0];
			$Notes = [];

			//Pour i ← 0 à 8
			for ($i = 0; $i <= 8; $i++) {
				//Ecrire "Entrez la note numéro ", i + 1
				//Lire Notes(i)
				$iTabNotes[$i] = $sMessage = "Entrez la note numéro ". $i + 1;
				//Notes = Notes +  "[ " + iTabNotes[i] + " ]"
				$Notes = $Notes . "[ " . $iTabNotes[$i] . " ]";
			}
			//Ecrire Notes
			$_POST["PHP" . $Notes];
		} // Fin
		//Variables global tableau notes,i

	require "exo_3.html";

?>
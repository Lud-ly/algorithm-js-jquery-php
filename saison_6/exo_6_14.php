<?php

$sMessage= "";
$sMessage2= "";
$sMessage3= "";

$iNoteTab = array();
$nb = 0;
$moy = 0;
$som = 0;
$myVal = 0;
$nbSup=0;
// SI $_POST["whyNot"] EXISTE ET QUE $_POST["whyNot"] N EST PAS VIDE ALORS
if ((isset($_POST["myPhp"])) && (!(empty($_POST["myPhp"]))))
	{
		  // Variables Nb, i, Som, Moy, Nbsup en Numérique
                //Tableau T() en Numérique
                //Debut
				//Ecrire "Entrez le nombre n° ", i + 1
                //Ecrire "Entrez le nombre de notes à saisir :"
				//Lire value Nb
				$nb =  (int)$_POST["myPhp"];
                //Ecrire "Entrez les notes  : "
				// Lire value myVal
				$iNoteTab = explode(" " ,$_POST["myVal"]);
				//Ecrire iNoteTab
				$sMessage = implode("," ,$iNoteTab);
				//calc somme T et moyenne moy
				//Pour y = 0 à longueur de iNoteTab
				for($y= 0; $y<count($iNoteTab); $y++){
					$som = $iNoteTab[$y] + $som;
				}
				$moy = $som /count($iNoteTab);

				//Pour chaque val dans T
				foreach($iNoteTab as $val) {
                    //Si val > moy
                    if ($val > $moy) {
                        // nbSup = nbSup + 1;
                        $nbSup++;
                    }// FinSi
                }
                    //Ecrire "Les notes ,iTabNotes"
                   $sMessage = ("PHP voici les notes : " . implode("," ,$iNoteTab));
                    //Ecrire "la moyenne est de : " , moy
                   $sMessage2 = ("la moyenne est de : " . $moy);
                    //Ecrire NbSup, " élèves dépassent la moyenne de la classe" arrondir
                   $sMessage3 = ($nbSup . " élèves dépassent la moyenne de la classe");
            } //Fin
       
	
	require "exo_6_14.html";

?>

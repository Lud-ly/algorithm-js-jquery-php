<?php
session_start();
session_reset();
$sMessage= "";
$sMessage2= "";
$sMessage3= "";
$sMessage4= "";

$i = 2;
$iNoteTab = [];
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
				$sMessage = ("Entrer la notes n°" . $i++);
                //Ecrire "Entrez le nombre de notes à saisir :"
				//Lire value Nb
				$nb =  (int)$_POST["myPhp"];
				$nb = count($_SESSION["iNoteTab"]);
                //Ecrire "Entrez les notes  : "
				// Lire value myVal
				$myVal =  (int)$_POST["myVal"];
               
				//pusher myVal dans array T
				$_SESSION["iNoteTab"][]=$myVal;
				var_dump($_SESSION["iNoteTab"]);
				//calc somme T et moyenne moy
				for($y=0;$y<$nb;$y++){
					$som = $som + $myVal;
					$moy = $som / $nb;
				}
				//Pour chaque val dans T
				var_dump("som" .$som);
				foreach($_SESSION["iNoteTab"] as $myVal) {
                    //Si val > moy
                    if ($myVal > $moy) {
                        // nbSup = nbSup + 1;
                        $nbSup++;
                    }// FinSi
                }
               // if ($nb == count($_SESSION["iNoteTab"])) {
                    //Ecrire "Les notes ,T"
                   $sMessage2 = ("PHP voici les notes : " . $iNoteTab);
                    //Ecrire "la moyenne est de : " , moy
                   $sMessage3 = ("la moyenne est de : " . $moy);
                    //Ecrire NbSup, " élèves dépassent la moyenne de la classe" arrondir
                   $sMessage4 = ($nbSup . " élèves dépassent la moyenne de la classe");
               // }
            } //Fin
       
	
	require "exo_6_14.html";

?>

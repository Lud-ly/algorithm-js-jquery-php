<?php
	
	$sMessage= "";

	if ((isset($_POST["sNom"])) && (!(empty($_POST["sNom"]))))
	{
		if ((isset($_POST["sNom2"])) && (!(empty($_POST["sNom2"]))))
	{
		if ((isset($_POST["sNom3"])) && (!(empty($_POST["sNom3"]))))
	{
                $sNom = $_POST["sNom"];
                $sNom2 = $_POST["sNom2"];
                $sNom3 = $_POST["sNom3"];
                if (($sNom < $sNom2) && ($sNom2 < $sNom3)) {
					$sMessage= "Bravo PHP Ces noms sont classés alphabétiquement !";
                }
                else {
					$sMessage= "Désolé PHP Ces noms ne sont pas classés !";
                }
			}
		}
	}
	require "exo_3.html";

?>

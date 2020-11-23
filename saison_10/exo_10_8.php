<?php

// Structure Bottin
// Nom en Caractère * 20
// Prénom en Caractère * 15
// Tel en caractère * 10
// Mail en Caractère * 20
// Fin Structure
// Tableau Mespotes() en Bottin
// Variable MonPote en Bottin
// Variables i, j en Numérique
// Debut
//     Ouvrir "Adresse.txt" sur 1 pour Lecture
//     i ← -1
//     Tantque Non EOF(1)
//         LireFichier 1, MonPote
//         nb ← 0
//         Pour i ← 1 à Len(MonPote.Mail)
//             Si Mid(MonPote.Mail, i, 1) = "@" Alors
//             nb ← nb + 1
//             FinSi
//         i suivant
//         Si nb = 1 Alors
//             i ← i + 1
//             Redim MesPotes(i)
//             MesPotes(i) ← MonPote
//         FinSi
//     FinTantQue
//     Fermer 1
//     Ouvrir "Adresse.txt" sur 1 pour Ecriture
//     Pour j ← 0 à i
//         EcrireFichier 1, MesPotes(j)
//     j Suivant
//     Fermer 1
// Fin
	
	require "exo_10_8.html";

?>
/*excercice 4.1
ecrire entrez une valeur pour tutu
ecrire entrez une valeur pour toto
Si Tutu <= Toto + 4 ET Tata <> "OK" Alors
  Tutu ← Tutu - 1
Sinon
  Tutu ← Tutu + 1
Finsi
 
console.log(tutu = (prompt("entrez une valeur pour tutu")));
console.log(toto = (prompt("entrez une valeur pour toto")));
tata = "ok";
if (tutu <= toto + 4 || tata) {
    tutu =tutu + 1;
}
else{
    tutu = tutu - 1;
}
consoleLog(tutu,toto,tata);
*/

/*excercice 4.2 */
/*Variables heures, minutes en Numérique
Début
Ecrire "Entrez les heures, puis les minutes : "
Lire h, m
m ← m + 1
Si m = 60 Alors
  m ← 0
  h ← h + 1
FinSi
Si h = 24 Alors
  h ← 0
FinSi
Ecrire "Dans une minute il sera ", h, "heure(s) ", m, "minute(s)"
Fin

 minutes=0;
heures=0;
console.log(heures = parseInt(prompt("Entrez les heures")));
console.log(minutes = parseInt(prompt("Entrez les minutes")));
console.log("il est",heures,"heures et",minutes,"minutes")
minutes+=1;
if (minutes == 60) {
    minutes = 0;
    heures = heures + 1
}
if (heures == 24) {
    heures = 0;
}
console.log("Dans une minute il sera ", heures, "heure(s) ", minutes, "minute(s)");
*/

/*excercice 4.3 */
/*Variables heures, minutes en Numérique
Début
Ecrire "Entrez les heures, puis les minutes : "
Lire h, m
m ← m + 1
Si m = 60 Alors
  m ← 0
  h ← h + 1
FinSi
Si h = 24 Alors
  h ← 0
FinSi
Ecrire "Dans une minute il sera ", h, "heure(s) ", m, "minute(s)"
Fin

minutes=0;
heures=0;
secondes=0;
console.log(heures = parseInt(prompt("Entrez les heures")));
console.log(minutes = parseInt(prompt("Entrez les minutes")));
console.log(secondes = parseInt(prompt("Entrez les secondes")));
console.log("il est",heures,"heures et",minutes,"minutes",secondes,"secondes");
secondes+=1;
if (minutes == 60) {
    minutes = 0;
    heures += 1;
}
if (heures == 24) {
    heures = 0;
}
if (secondes == 60) {
    secondes = 0;
    minutes=0;
    heures+=1;
}
console.log("Dans une minute il sera ", heures, "heure(s) ", minutes, "minute(s)",secondes,"seconde(s)");*/


/*exercice 4.4 */
/*
Variables nombre, prix en Numérique
Début
Ecrire "Nombre de photocopies : "
Lire nombre
Si nombre <= 10 Alors
  prix ← nombre * 0,1
SinonSi nombre <= 30 Alors
  prix ← 10 * 0,1 + (nombre – 10) * 0,09
Sinon
  prix ← 10 * 0,1 + 20 * 0,09 + (nombre – 30) * 0,08
FinSi
Ecrire "Le prix total à payer est: ", prix
Fin
 
nombre=0;
 prix = 0;
console.log(nombre = parseInt(prompt("Entrez le nombre de photocopies à réaliser")));
if (nombre <= 10) {
    prix = nombre * 0.1;
}
else if (nombre <= 30) {
    prix = 10 * 0.1 + (nombre - 10) * 0.09;
}
else {
    prix = 10 * 0.1 + 20 * 0.09 + (nombre - 30) * 0.08;
}
console.log("le prix à payer est de", prix, "€")*/

/*exercice 4.5 */
/*
age=0;
sexe="";
début
Ecrire "Entrez votre age de Toon:"
lire age
Ecrire "Entrez votre sexe homme/femme :"
lire sexe
si sexe=="homme" && age <20
ecrire "Cher Toon, vous n'êtes pas imposable"
sinon
ecrire "Vous êtes imposable cher Toon,payer! "
if sexe=="femme" && 18<age>35
ecrire "Chère Toone,vous n'êtes pas imposable"
sinon
ecrire "Vous êtes imposable cher Toone,banquer!"

age = 0;
sexe = "";
console.log(age = parseInt(prompt("Entrez votre age:")));
console.log(sexe = (prompt("Entrez votre sexe homme/femme :")));
//console.log(typeof sexe,typeof age);
if (sexe == "homme" && age < 20) {
    console.log("Cher Toon, vous n'êtes pas imposable");
}
else if(sexe == "homme" && age>20) {
    console.log("Vous êtes imposable cher Toon, payer ! ");
}
if (sexe == "femme" && age < 18 || age > 35) {
    console.log("Chère Toone,vous n'êtes pas imposable");
}
else if(sexe == "femme" && age > 18 || age < 35) {
    console.log("Vous êtes imposable cher Toone,banquer!");
}*/
/*exercice 4.6
 
Variables trum, melencho, poutin, macro en Numérique
Variables Cas1, Cas2, Cas3, Cas4 en Booléen
Début
Ecrire "Entrez les scores des quatre prétendants :"
Lire trump, melenchon, poutine, macron
Cas1 ← trump > 50
Cas2 ← melenchon > 50 ou poutine > 50 ou macron > 50
Cas3 ← trump >= melencho et trump >= poutin et trump >= macro
Cas4 ← trump >= 12,5
Si Cas1 Alors
  Ecrire “Elu au premier tour"
Sinonsi Cas2 ou Non(Cas4) Alors
  Ecrire “Battu, éliminé, sorti !!!”
SinonSi Cas3 Alors
  Ecrire "Ballotage favorable"
Sinon
  Ecrire "Ballotage défavorable"
FinSi
Fin

trum = 0; melencho = 0; poutin = 0; macro = 0;
console.log(trum = (prompt("Entrez 1er prétendants :")));
console.log(melencho = (prompt("Entrez 2eme prétendants :")));
console.log(poutin = (prompt("Entrez 3eme prétendants :")));
console.log(macro = (prompt("Entrez 4eme prétendants :")));


cas1 = trum > 50;
cas2 = melencho > 50 && poutin > 50 && macro > 50;
cas3 = trum >= melencho && trum >= poutin && trum >= macro;
cas4 = trum >= 12.5;

for (i = 0; i <= 4; i++) {
  if (cas1) {
    console.log("Elu au premier tour");
  }
  else if (cas2 || cas4 == false) {
    console.log("Battu, éliminé, sorti !!!");
  }
  else if (cas3) {
    console.log("Ballotage Favorable");
  }
  else {
    console.log("Ballotage Defavorable");
  }
}
*/

/*Exercice 4.7 

Variables age, perm, acc, assur,//pointContrat en Numérique
Variables Cas1, Cas2, Cas3 en Booléen
Variable situation en Caractère
Début
Ecrire "Entrez l’âge: "
Lire age
Ecrire "Entrez le nombre d'années de permis: "
Lire perm
Ecrire "Entrez le nombre d'accidents: "
Lire acc
Ecrire "Entrez le nombre d'années d'assurance: "
Lire assur
Cas1 ← age >= 25
Cas2 ← perm >= 2
Cas3 ← assur > 5
pointContrat ← 0
Si faux(Cas1) Alors
  pointContrat ← pointContrat + 1
FinSi
Si faux(Cas2) Alors
  pointContrat ← pointContrat + 1
FinSi
pointContrat ← pointContrat + acc
Si pointContrat < 3 et Cas3 Alors
  pointContrat ← pointContrat - 1
FinSi
Si pointContrat = -1 Alors
  situation ← "Bleu"
SinonSi pointContrat = 0 Alors
  situation ← "Vert"
SinonSi pointContrat = 1 Alors
  situation ← "Orange"
SinonSi pointContrat = 2 Alors
  situation ← "Rouge"
Sinon
  situation ← "Refusé"
FinSi
Ecrire "Votre situation : ", situation
Fin

function Exo_4_7(){
age = 0; perm = 0; acc = 0; assur = 0, pointContrat = 0;
situation = "";
//Ecrire "Entrez l’âge: "
//Lire age
console.log(age = (prompt("Entrez l'age de futur assuré :")));
//Ecrire "Entrez le nombre d'années de permis: "
//Lire perm
console.log(perm = (prompt("Entrez le nombre d'années de permis:")));
//Ecrire "Entrez le nombre d'accidents: "
//Lire acc
console.log(acc = (prompt("Entrez le nombre d'accidents:")));
//Ecrire "Entrez le nombre d'années d'assurance: "
//Lire assur
console.log(assur = (prompt("Entrez le nombre d'années d'assurance: ")));

//cas n°1 age superieur à 25
cas1 = age >= 25;
//cas n°2 permis superieur à 2 ans
cas2 = perm >= 2;
//cas n°3 nombre d'années d'assurance supeieur a 5
cas3 = assur > 5;
//Si cas1=false Alors
  //pointContrat ← pointContrat + 1
if (cas1 == false) {
  pointContrat += 1;
}
//Si cas2 = false 
//pointContrat ← pointContrat + 1
if (cas2 == false) {
  pointContrat += 1;
}
pointContrat = pointContrat + acc;
if (pointContrat < 3 && cas3) {
  pointContrat -= 1;
}
if (pointContrat == -1) {
  situation = "Contrat Bleu";
}
else if (pointContrat == 0) {
  situation = "Contrat Vert";
}
else if (pointContrat == 1) {
  situation = "Contrat Orange";
}
else if (pointContrat == 2) {
  situation = "Contrat Rouge";
}
else {
  situation = "Contrat Refusé";
}
console.log("Votre situation est : ", situation)
}
Exo_4_7();
*/
/*exercice 4.8*/
/*EXEMPLE 1
Variables Jour, Mois, Année en Numérique
Début
Ecrire "Entrez le numéro du jour"
Lire Jour
Ecrire "Entrez le numéro du mois"
Lire Mois
Ecrire "Entrez l'année"
Lire Année
Si Mois < 1 ou Mois > 12 Alors
  Ecrire "Date Invalide"
SinonSi Mois = 2 Alors
  Si Année dp 400 Alors
    Si Jour < 1 ou Jour > 29 Alors
      Ecrire "Date Invalide"
    Sinon
      Ecrire "Date Valide"
    FinSi
  SinonSi Année dp 100 Alors
    Si Jour < 1 ou Jour > 28 Alors
      Ecrire "Date Invalide"
    Sinon
      Ecrire "Date Valide"
    FinSi
  SinonSi Année dp 4 Alors
    Si Jour < 1 ou Jour > 29Alors
      Ecrire "Date Invalide"
    Sinon
      Ecrire "Date Valide"
    FinSi
  Sinon
    Si Jour < 1 ou Jour > 28 Alors
      Ecrire "Date Invalide"
    Sinon
      Ecrire "Date Valide"
    FinSi
  FinSi
SinonSi Mois = 4 ou Mois = 6 ou Mois = 9 ou Mois = 11 Alors
  Si Jour < 1 ou Jour > 30 Alors
    Ecrire "Date Invalide"
  Sinon
    Ecrire "Date Valide"
  FinSi
Sinon
  Si Jour < 1 ou Jour > 31 Alors
    Ecrire "Date Invalide"
  Sinon
    Ecrire "Date Valide"
  FinSi
FinSi

function Exo_4_8(){
var jour; var mois; var année;
jour = (prompt("Entrez le numéro du jour : "));
mois = (prompt("Entrez le numéro du mois : "));
année = (prompt("Entrez l'année  : "));
if (mois < 1 || mois > 12) {
  console.log("Date invalide");
}
else if (mois == 2) {
  if (année / 400) {
    if (jour < 1 || jour > 29) {
      console.log("Date invalide");
    }
    else {
      console.log("Date Valide");
    }
  }
  else if (année / 100) {
    if (jour < 1 || jour > 28) {
      console.log("Date invalide");
    }
    else {
      console.log("Date Valide");
    }
  }
  else if (année / 4) {
    if (jour < 1 || jour > 29) {
      console.log("Date invalide");
    }
    else {
      console.log("Date Valide");
    }
  }
  else {
    if (jour < 1 || jour > 28) {
      console.log("Date invalide");
    }
    else {
      console.log("Date Valide");
    }
  }
}
else if (mois == 4 || mois == 6 || mois == 9 || mois == 11) {
  if (jour < 1 || jour > 30) {
    console.log("Date Invalide");
  }
  else {
    console.log("Date Valide");
  }

}
else {
  if (jour < 1 || jour > 31) {
    console.log("Date Invalide");
  }
  else {
    console.log("Date Valide");
  }
}
}
Exo_4_8();
*/
/*EXEMPLE 2
Bissextile ← (Année dp 4 et Non(Année dp 100)) ou Année dp 400
cas1 ← (mois=1 ou m=3 ou m=5 ou m=7 ou m=8 ou m=10 ou m=12) et (J>=1 et J=<31)
cas2 ← (m=4 ou m=6 ou m=9 ou m=11) et (J>=1 et J=<30)
cas3 ← m=2 et B et J>=1 et J=<29
cas4 ← m=2 et J>=1 et J=<28
Si cas1 ou cas2 ou cas3 ou cas4 Alors
  Ecrire "Date valide"
Sinon
  Ecrire "Date non valide"
FinSi
Fin

jour = 0; mois = 0; année = 0;
jour = (prompt("Entrez le numéro du jour : ")));
mois = (prompt("Entrez le numéro du mois : ")));
année = (prompt("Entrez l'année  : ")));

bissextile = (année % 4 && !(année % 100)) || année % 400;
cas1 = (mois == 1 || mois == 3 || mois == 5 || mois == 7 || mois == 8 || mois == 10 || mois == 12) && (jour >= 1 && jour <= 31);
cas2 = (mois == 4 || mois == 6 || mois == 9 || mois == 11) && (jour >= 1 && jour <= 30);
cas3 = mois == 2 && bissextile && jour >= 1 && jour <= 29;
cas4 = mois == 2 && jour >= 1 && jour <= 28;
if (cas1 || cas2 || cas3 || cas4) {
  console.log("Date Valide")
}
else {
  console.log("Date Non-valide")
}
*/


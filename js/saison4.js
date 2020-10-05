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
Cas3 ← trump >= B et trump >= C et trump >= D
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
Fin*/
console.log("Entrez les scores des quatre prétendants :");

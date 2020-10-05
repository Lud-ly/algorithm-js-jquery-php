/*exercice 3.1*/
/*
nombre en numerique
debut
ecrire nombre=prompt"donnez un nombre"
lire le nombre
si nombre >0 alors
ecrire=alert le nombre est positif
sinonsi nombre <0 alors
ecrire=alert le nombre est negatif
sinon
ecrire=alert le nombre est null
fin

nombre = 0;
console.log(nombre = prompt("donnez un nombre:"));
if (nombre > 0) {
    alert("le nombre est positif")
}
else if (nombre < 0) {
    alert("le nombre est negatif");
}
else {
    alert("le nombre est null");
}*/


/*exercice 3.2*/
/*
nombre1 en numerique
nombre2 en numerique
debut
ecrire nombre1="donnez un nombre n°1 )"
ecrire nombre2="donnez un nombre n°2 )"
lire nombre1 et nombre2
si nombre1 ET nombre2 >0 alors
ecrire=alert le nombre est positif
sinonsi nombre1 ET nombre2 <0 alors
ecrire=alert le nombre est negatif
fin

nombre1 = 0;
nombre2 = 0;
console.log(nombre1 = prompt("donnez un nombre n°1:"));
console.log(nombre2 = prompt("donnez un nombre n°2:"));
if (nombre1 && nombre2 > 0 ) {
    alert("les nombres sont positif")
}
else if (nombre1 && nombre2 < 0) {
    alert("le nombre est negatif");
}
*/


/*exercice 3.3*/
/*
nom1,nom2,nom3 en string
debut
ecrire "entrez 3 noms"
ecrire nom1="donnez le nom n°1 )"
ecrire nom2="donnez le nom n°2 )"
ecrire nom3="donnez le nom n°3 )"
lire  nom1  nom2  nom3
Si nom1 < nom2 ET nom2 < nom3 Alors
  Ecrire "Ces noms sont classés alphabétiquement"
Sinon
  Ecrire "Ces noms ne sont pas classés"
Finsi
Fin

nom1 = "";
nom2 = "";
nom3 = "";
alert("donnez 3 noms");
console.log(nom1 = prompt("donnez un nom n°1:"));
console.log(nom2 = prompt("donnez un nom n°2:"));
console.log(nom3 = prompt("donnez le nom n°3:"));
if (nom1 < nom2 && nom2 < nom3) {
    alert("Ces noms sont classés alphabétiquement !");
}
else {
    alert("Ces noms ne sont pas classés");
}*/

/*exercice 3.4*/
/*
nombre en numerique
debut
ecrire nombre=prompt"donnez un nombre"
lire le nombre
si nombre >0 alors
ecrire=alert le nombre est positif
sinonsi nombre <0 alors
ecrire=alert le nombre est negatif
sinon
ecrire=alert le nombre est 0
fin

nombre = 0;
console.log(nombre = prompt("donnez un nombre:"));
if (nombre > 0) {
    alert("le nombre est positif")
}
else if (nombre < 0) {
    alert("le nombre est negatif");
}
else {
    alert("le nombre est 0");
}
*/

/*exercice 3.5*/
/*
nombre1 en numerique
nombre2 en numerique
debut
ecrire nombre1="donnez un nombre n°1 )"
ecrire nombre2="donnez un nombre n°2 )"
lire nombre1 et nombre2
dans function
si nombre1<0 et nombre2>0 ou nombre1>0 et nombre2<0 alors
ecrire "le produit est null"
sinonsi nombre1 ET nombre2 >0 alors
ecrire=alert le nombre est positif
sinonsi nombre1 ET nombre2 <0 alors
ecrire=alert le nombre est negatif
fin

nombre1 = 0;
nombre2 = 0;
console.log(nombre1 = prompt("donnez un nombre n°1:"));
console.log(nombre2 = prompt("donnez un nombre n°2:"));

function numbers() {
    if (nombre1 < 0 && nombre2 > 0 || nombre1 > 0 && nombre2 < 0) {
        alert("les nombres sont NULL !");
    }
    else if (nombre1 > 0 && nombre2 > 0) {
        alert("les nombres sont positif");
    }
    else if (nombre1 < 0 && nombre2 < 0) {
        alert("les nombres est negatif");
    }

}
numbers();
*/
/*excercice 3.6 */
/*
Variable age en Entier
Début
Ecrire "Entrez l’âge de l’enfant : "
Lire age
Si age >= 12 Alors
  Ecrire "Catégorie Cadet"
SinonSi age >= 10 Alors
  Ecrire "Catégorie Minime"
SinonSi age >= 8 Alors
  Ecrire "Catégorie Pupille"
SinonSi age >= 6 Alors
  Ecrire "Catégorie Poussin"
Finsi
Fin
 
function license() {
    console.log(age = prompt("saisir votre age"));

    if (age >= 12) {
        alert("category cadet")
    }
    else if (age >= 10) {
        alert("category minime")
    }
    else if (age >= 8) {
        alert("category pupille")
    }
    else if (age >= 6) {
        alert("category poussin")
    }
    else{
        alert("trop jeune !")
    }
}

license();   */
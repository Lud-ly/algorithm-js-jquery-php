/*
/*Exercice 1.1*/
var a = 17;
var b = a + 2;
var a = 9;
console.log("a", a, "b", b)

/*Exercice 1.2 */
var a = 51;
var b = 34;
var c = a + b;
var a = 21;
var c = b - a;
console.log(a, b, c);

/*Exercice 1.3*/
var a = 49;
var b = a + 4;
var a = a + 1;
var b = a - 4;
console.log(a, b);

/*Exercice 1.4*/
var a = 13;
var b = 19;
var c = a + b;
var b = a + b;
a = c;
console.log(a, b, c);

/*Exercice 1.5*/
/*oui,la valeur est d'abord affecté à a puis a est egal à b donc 14
sinon, la valeur est affecté à b puis b est egal à a donc 29*/
var a = 14;
var b = 29;
/*
b=a
a=b
 */
a = b;
b = a;
console.log(a, b);

/*Exercice 1.6*/
/*
a=10
b=20
a = a+b
b = a-b
a = a-b
ecrire a et b
*/
var a = 5;
var b = 15;
console.log("a", a, "b", b);
a = a + b
b = a - b
a = a - b
console.log("new a", a, "new b", b);
/*Exercice 1.7*/
/*a,b,c en numerique
ecrire a,b,c
a = a + b;
b = a - b;
a = a - b;
c = b - c;
c = b + b;
c = a + c;
a = c - a;
c = c - a;
ecrire a,b,c
 */
a = 5;
b = 10;
c = 15;
console.log("a->", a, "b->", b, "c->", c);

a = a + b;
b = a - b;
a = a - b;
console.log("b->", b);

c = b - c;
c = b + b;
console.log("c->", c);

c = a + c;
a = c - a;
c = c - a;
console.log("a->", a);
/*Exercice 1.8*/
a = "573";
b = "19";
c = a + b;
console.log("57319", c);
/*Exercice 1.9*/
a = "573";
b = "19";
c = a & b;
console.log(c);
console.log("krack")
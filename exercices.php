<?php

/*
 * Ce fichier PHP va contenir un ensemble d'exercice qui pourront être 
 * lancés en ligne de commande.
 * L'idée est de permettre de travailler sur la syntaxe du langage PHP
 * sans s'occuper de la partie affichage de la page
 * 
 * Pour cela il faudra pouvoir lancer la commande 'php exercice.php' depuis
 * un terminal, "cmd" pour Windows, "terminal" depuis mac.
 * Ou encore plus simple en utilisant directement le terminal depuis 
 * visual studio code.
 * 
 * PHP est un langage de script qui exécute des instructions l'une après
 * l'autre; Chaque instruction se terminant par un ";"
 * Nous pouvons voir une instruction comme un ordre simple demandé au serveur.
 * 
 * Une des erreurs les plus courantes est d'oublié ce ";" à la fin d'une
 * instruction.
 */

/*
 * La commande echo permet l'affichage de texte en sortie du traitement PHP
 * Son équivalent print est complétement équivalent.
 * Il n'est pas rare en PHP d'avoir plusieurs fonctions qui permettent de faire
 * la même chose
 * 
 * Chaque echo affiche à la suite du précédent.
 * Pour ajouter des sauts de ligne vous devez utiliser le caractère spécial
 * "saut de ligne" qui s'écrit "\n" (new line)
 * 
 * Pour "échapper" un caractère spécial vous pouvez utiliser le caractère d'échappement
 * "\", par exemple "\\n" affichera "\n" et aussi "\\" affichera "\"
 */

echo "Exemple d'utilisation de echo :\n";   // Ici le saut de ligne permettra de faire le prochain affichage à la ligne suivante
echo "le symbôle \\n est échappé pour être visible dans l'affichage\n";
print "Que ce soit avec la fonction echo ou print vous aurez le même retour\n";

echo "\n"; // Juste un saut de ligne pour aérer l'affichage

/*
 * Dans le cours nous avons les différents types de données et ici nous allons
 * jouer avec.
 * 
 * Les chaînes de caractères : string sont un des types de base
 * 
 * Un des premier exercice de tout langage de programmation est le fameux
 * "Hello world"
 * Je vous propose donc d'écrire juste en dessous votre "Hello world" ou
 * "Salut + votre prénom" avec l'opérateur de concaténation  des chaines "."
 * 
 * Une fois cela fait vous pouvez tester en exécutant la commande php
 * "php exercice.php"
 */

//echo .... à vous de jouer

/* 
 * Et si nous faisions un peu de mathématique
 * Vous connaissez les 4 opérateurs de base : +, -, *, et /
 * Pour stocker nos opérations nous allons utiliser des variables.
 * Une variable est ce qui permet de stocker une valeur ou une référence.
 * 
 * Par exemple $a est la variable $a, nous pouvons lui affecter une valeur
 * avec l'opérateur "=" : "$a = 4;" insère 4 dans la variable $a
 * 
 * Toutes les variables commencent par "$" en PHP
 * Mais en vous basant sur le cours, Quelles sont les variables avec un nom
 * valide ?
 * $a, $_a, $a_a, $AAA, $a!, $1a et $a1
 * 
 * Écrivez vos réponses ici : 
 * 
 * Maintenant faisons un calcul de moyenne
 */
echo "\nExercice 2 : calcul de moyenne :\n";

$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3; // Je ne pense pas que vous vouliez 0 en moyenne, remplacez par le bon calcul
echo "La moyenne est de " . $moyenne . " / 20.\n";

echo "\n";

/* 
 * Et un calcul classique dans la vente HT => TTC
 */
echo "Exercice 3 : calcul du TTC :\n";

$prix_ht = 50;
$tva = 20;
$prix_ttc = 50 * 1.20; // Non le total n'est pas gratuit, remplacez par le bon calcul
echo "Le prix TTC du produit est de " . $prix_ttc . "€.\n";

echo "\n";

/* 
 * Il existe un autre opérateur mathématique l'opérateur modulo : "%"
 * qui représente le reste de la division.
 * Par exemple 150 modulo 100 représente 1 fois 100 plus 50 => il reste donc 50
 * Cet opérateur est très pratique dans le cadre de boucle pour effectuer
 * une opération tous les x tours.
 */
echo "Exercice 4 : Quel est le reste de 65537 divisé par 13 ?";

$reste = 65537 % 13; // remplacez par le bon calcul
echo "Le reste est de : $reste\n";

echo "\n";

/* 
 * Pour le debuggage des scripts PHP la fonction "var_dump" permet d'afficher le
 * contenu d'une variable ainsi que son type.
 * Par défaut PHP sait transformer des données d'un type à un autre
 * Par exemple en permettant de comparer une chaîne de caractère à un nombre
 * 42 et "42"
 */
echo "Exercice 5 : Modifiez l'affectation de \$a pour en faire une chaîne de caractère\n";
$a = "42"; // Transformez ce nombre en chaîne de caratère
echo "\$a est de type :\n";
var_dump($a);

/* 
 * Maintenant que nous avons manipulé les variables dans des instructions simples
 * nous pouvons commencer à utliser des structures de base pour les algorithmes
 * les conditions : "if"
 * Pour rappel la syntaxe de base est : 
 * "if (condition) {
 *   instruction alors 
 *  } elseif (autre condition) { 
 *   instruction sinon si 
 *  } else { 
 *   instruction sinon 
 *  }"
 * 
 * Les opérateurs de comparaison sont =, >, <, >=, <= et !=
 * Faire 2 < 3 renvoie vrai alors que 2 > 3 répondra faux
 * 
 * if (2 > 3) {
 *    // ne rentrera pas dans la condition
 *    // ce code ne sera pas exécuté
 * }
 * 
 * Pour cet exercice vous devez créer une variable $sexe qui contient une 
 * chaîne de caractère puis créez une condition qui affiche un message différent
 * en fonction de la valeur de la variable.
 */
echo "Exercice 6 : mon premier if\n";

// Écrivez votre code ici
$sexe = "homme";

if ($sexe == "homme") {
    echo "Vous êtes un $sexe";
} else {
    echo "Vous êtes un femme";
}


echo "\n \n";
/* 
 * Maintenant un autre exercice
 * Déclarer une variable $budget qui contient la somme de 1 553,89€. 
 * Déclarer une variable $achats qui contient la somme de 1 554,76€.
 * Afficher si le budget permet de payer les achats.
 */
echo "Exercice 7 : Ai je assez de budget ?\n";

// Écrivez votre code ici
$budget = 1553.89;
$achats = 1554.76;

if ($achats < $budget) {
    echo "Le budget permet de payer les achats";
} else {
    echo "Le budget ne permet pas de payer les achats";
}


echo "\n \n";
/* 
 * Encore un autre
 * Déclarer une variable $age qui contient la valeur de type integer de votre 
 * choix.
 * Réaliser une condition pour afficher si la personne est mineure ou majeure.
 */
echo "Exercice 8 : Êtes vous majeur ?\n";

// Écrivez votre code ici
$age = 21;
if ($age < 18) {
    echo "La personne est mineure";
} else {
    echo "La personne est majeure";
}


echo "\n \n";
/* 
 * Un dernier pour les conditions
 * Déclarer une variable $heure qui contient la valeur de type integer de 
 * votre choix comprise entre 0 et 24. 
 * Créer une condition qui affiche un message si l'heure est le matin, 
 * l'après-midi ou la nuit.
 * Je vous laisse juge de définir les paliers
 */
echo "Exercice 9 : Quelle est la période de la journée ?\n";

// Écrivez votre code ici
$heure = 2;

if ($heure > 8 && $heure < 12) {
    echo "C'est le matin";
} elseif ($heure > 12 && $heure < 18) {
    echo "C'est l'après-midi";
} else {
    echo "C'est la nuit";
}



echo "\n \n";
/* 
 * Pour des conditions plus complexes nous pouvons utiliser les opérations
 * booléennes (calcul à base de vrai et faux) ET : "&&" et OU : "||"
 * 
 * Par exemple si $age > 18 && $sexe = "homme" alors ...
 * Ou si $age <= 18 || $age >= 72 alors "vous êtes mineur ou trop vieux"
 * 
 * Exercice 10 :
 * Ecrivez l'algorithme suivant en PHP:
 * Si $age est supérieur ou égal à 18 ans et que $sexe est femme alors affichez "vous êtes une femme"
 * Sinon si $age est supérieur ou égal à 18 ans et que $sexe est homme alors affichez "vous êtes un homme"
 * Sinon si $age est inférieur à 18 et que $sexe égal homme ou $sexe égal femme alors affichez "vous êtes un enfant"
 */
echo "Exercice 10 : Un algorithme plus complexe\n";
// Écrivez votre code ici

if ($age >= 18 && $sexe == "femme") {
    echo "vous êtes une femme";
} elseif ($age >= 18 && $sexe == "homme") {
    echo "vous êtes un homme";
} elseif ($age <= 18 && $sexe == "femme" || $sexe == "homme") {
    echo "vous êtes un enfant";
}


echo "\n \n";

/*
 * Les boucles en PHP
 * Pour rappel il y en a 4 sortes : for, while, do while et foreach
 * 
 * En utilisant la boucle while, afficher tous les codes postaux possibles pour le département 59.
 * La syntaxe du while est la suivante
 * while (condition) {
 *   // instructions de la boucle
 * }
 */
echo "Exercice 11 : Ma boucle while\n";

// Écrivez votre code ici
$code_postal = 59000;
while ($code_postal <= 59999) {
    echo "$code_postal\n";
    $code_postal++; // équivalent à $code_postal = $code_postal + 1;
}

echo "\n \n";

/* 
 * Avec une boucle for afficher la table de multiplication de 5
 * Syntaxe du for :
 * for (initialisation de variable; condition; modification de variable en fin de boucle) {
 *   boucle
 * }
 * Par exemple :
 * for ($i = 0; $i < 10; $i++) {
 *   // boucle 10 fois de $i = 0 jusque $i = 9, soit 10 valeurs
 * }
 */
for ($i = 1; $i <= 10; $i++) {
    echo "5 * $i = " . 5 * $i . "\n";
  }
  
echo "\n\n";
  /* 
   * Rappel sur les tableaux :
   * la déclaration d'un tableau se fait avec "array()" ou "[]"
   * Par exemple : $a = []; ou $a = array(); déclare un tableau vide
   * $voitures = ['Toyota', 'Lamborghini', 'Ferrari']; est un tableau de 3 marques de voiture
   * Pour accéder à un élément du tableau nous pouvons utiliser son "indice", c'est à dire sa position
   * dans le tableau, les indices commencent toujours à 0
   * Par exemple $voitures[0] donnera 'Toyota' et voitures[1] donnera 'Lamborghini'
   * Remplacer une valeur se fait par l'affectation d'un indice
   * Par exemple $voitures[0] = 'Tesla' remplacera la valeur 'Toyota' par 'Tesla', 'Toyota ne fait plus
   * parti du tableau
   * Testez le
   */
  $voitures = ['Toyota', 'Lamborghini', 'Ferrari'];
  echo $voitures[0] . "\n";
  $voitures[0] = 'Tesla';
  echo $voitures[0] . "\n";
  
  $voitures[] = 'Lucid';
  echo $voitures[3] . "\n";
  
  
  /*
   * Les fonctions : function nom_de_ma_fonction (mes paramètres) { }
   * Une fonction nous sert à regrouper du code pour pouvoir l'appeler plusieurs fois.
   */
  
   $voitures = ['Toyota', 'Lamborghini', 'Ferrari'];
  
  /*
   * Créer une fonction pour vérifier si une marque est bien présente dans la liste
   * estPresent, en paramètre la chaine de caractère qu'on veut tester
   * et en réponse un booléen vrai ou faux (true ou false)
   */
  function estPresent ($marque) {
    // Pour accéder au tableau $voitures sans le passer en paramètre
    // Il faut utiliser le mot clé global
    global $voitures;
  
    // Boucle sur le tableau
    for ($i = 0; $i < count($voitures); $i++) {
      // Si la marque est trouvée alors retourner vrai
      if ($voitures[$i] == $marque)
        return true;
    }
    // La boucle est terminé sans avoir trouvé la marque demandé
    // donc retourner faux
    return false;
  }
  
  
  if (estPresent("Toyota"))
    echo "J'ai une Toyota\n";
  else 
    echo "Je n'ai pas de Toyota\n";
  
  /// Modifier le tableau voitures pour qu'on me dise que j'ai une citroën
  $voitures[] = "Citroën"; // le [] permet d'ajouter à la fin du tableau
  // ou avec array_push
  $count = array_push($voitures, "Volvo");
  echo "J'ai $count voitures\n";
  
  if (estPresent("Citroën"))
    echo "J'ai une Citroën\n";
  else
    echo "Je n'ai pas de Citroën\n";
  
  /*
   * Une fonction récursive est une fonction qui s'appelle elle même
   * L'exemple le plus classique c'est la fonction factorielle
   * 5! = 5*4*3*2*1 ==> 5! = 5*4!
   * 10! = 10*9*8*7*6*5*4*3*2*1
   */
  function factorielle ($int) {
    // Si la valeur est 1 alors on renvoie 1
    if ($int == 1)
      return 1;
    // Sinon on renvoie $int * factorielle($int)
    else
      return $int * factorielle($int - 1);
  }
  
  echo "5! = " . factorielle(5) . "\n";
  echo "2! = " . factorielle(2) . "\n";
  echo "10! = " . factorielle(10) . "\n";
  
  
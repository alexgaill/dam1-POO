<?php

echo "On est une usine qui crée des voitures";
echo "<br>";

echo "Aujourd'hui nous devons en fabriquer 3.";
echo "<br>";

/**
 * Pour utiliser un objet, on va devoir charger le fichier qui contient la class
 * et instancier l'objet (le générer)
 */

require "../class/Vehicule.php";
require "../class/Voiture.php";
require "../class/Moto.php";
// J'instancie la class Voiture pour créer un objet voiture
// $voiture1 = new Voiture();
// // Je modifie la valeur de la propriété couleur de la voiture
// $voiture1->couleur = "rouge";

// $voiture2 = new Voiture();
// $voiture2->couleur = "bleue";
// $voiture3 = new Voiture();
// $voiture3->couleur = "grise";

// var_dump($voiture1);
// echo "<br>";
// var_dump($voiture2);
// echo "<br>";
// var_dump($voiture3);
// echo "<br>";

// for ($i=1; $i<4 ; $i++) { 
//     $varVoiture = "voiture$i";
//     echo "La voiture ". $$varVoiture->couleur . " a été fabriquée";
//     echo "<br>";
// }


// $voiture1->peindreVoiture("jaune");
// echo "La voiture 1 a été repeinte en ". $voiture1->couleur;
// echo "<br>";
// var_dump($voiture1);

// $voiture1->setMarque("Peugeot");
// echo $voiture1->getMarque();

$voiture = new Voiture();
$moto = new Moto();

var_dump($voiture);
echo "<br>";
var_dump($moto);



/**
 * Exercice
 * 
 * Vous devez créer une class chat et une class chien. 
 * Ces deux animaux ont les propriétés suivantes qui ne sont pas accessible en dehors des class:
 * 
 * - nom
 * - age
 * - couleurPelage
 * - cri
 * 
 * Tous les champs sont identiques mais on sait que les chiens aboient et les chats miaulent.
 * 
 * 
 * Constituer les class adaptées au code et sur l'index charger 1 chat gribouille 4 ans roux et un chien Pepper 5ans marron
 */

require "../class/Animaux/Animal.php";
require "../class/Animaux/Chien.php";
require "../class/Animaux/Chat.php";

$chien = new Chien("Pepper", 5, "marron");
//  $chien->setNom("Pepper");
//  $chien->setAge(5);
//  $chien->setCouleurPelage("marron");

$chien2 = new Chien("Sunshine", 1, "grise");

$chat = new Chat("Gribouille", 4, "roux");
//  $chat->setNom("gribouille");
//  $chat->setAge(4);
//  $chat->setCouleurPelage("roux");

echo "<br>";
echo "<br>";
var_dump($chien);
echo "<br>";
var_dump($chien2);
echo "<br>";
var_dump($chat);

// Pour utiliser la constante d'un class, on doit appeler la class 
// et utilisé l'opérateur de résolution de portée (::) avec le nom de la constante.

// On utilise un opérateur de résolution de portée car il permet de résoudre 
// l'accessibilité à des données qui n'appartiennent pas à un objet
echo Chat::ESPECE;
echo "<br>";
// fais référence à la propriété static $sport
echo "Le chat fait une ". Chat::$sport;
echo "<br>";
echo "Le chien fait une ". Chien::$sport;
echo "<br>";

Chien::$sport = "nage";

echo "Le chat fait une ". Chat::$sport;
echo "<br>";
echo "Le chien fait une ". Chien::$sport;
echo "<br>";

echo "Le chien ". $chien->getSport();

echo "<br>";


require "../src/Controller/CategorieController.php";

$controller = new CategorieController;
$controller->home();
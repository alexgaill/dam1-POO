<?php

/**
 * On définit la class voiture qui est présente dans un fichier qui porte de le même pour plus de simplicité d'organisation du code
 * 
 * Une classe est "un moule" qui va permettre de créer des objets suivants les informations que l'on va définir.
 * Ces informations sont appelées des propriétés (ce sont les variables de l'objet).
 * Une class va également pouvoir attribuer des méthodes à un objet. 
 * Ces méthodes sont des fonctions qui vont nous permettre d'utiliser le.s objet.s crée.s
 * 
 * La class Voiture est une class enfant de Vehicule. On parle d'héritage.
 * Une class qui hérite d'une autre récupère toutes les propriétés et méthodes public et protected
 */
class Voiture extends Vehicule{

    /**
     * Notre class voiture possède 3 propriétés représentant la marque, le modèle et la couleur de la voiture fabriquée
     *
     * Les propriétés et les méthodes sont régies par une visibilité appelée encore portée.
     * Il existe 3 visibilité:
     * - public: La propriété ou méthode est accessible partout dans le code. On peut modifier la valeur de la propriété à souhait
     * - private: La propriété ou méthode n'est accessible que dans la classe où elle est déclarée. En dehors on va devoir utiliser des getters ou setters
     * - protected: La propriété ou méthode est accessible dans la classe où elle est déclarée et dans les classes enfants (héritage).
     * 
     * L'utilisation de la visibilité s'appelle l'encapsulation.
     */
    // private $marque = "Renault";
    // public $modele = "Twingo 3";
    // public $couleur;
    // private $nbRoue = 4;
    protected $nbRoue = 4;

    // /**
    //  * La class voiture possède une method peindreVoiture qui permet de changer la couleur de la voiture.
    //  * Une method(méthode) est une fonction.
    //  *
    //  */
    // public function peindreVoiture ($couleur) {
    //     $this->couleur = $couleur;
    // }

    // /**
    //  * Un getter ou accesseur est une méthode permettant d'accéder à la valeur d'une propriété private.
    //  * Ce getter est public pour rendre la valeur accessible partout.
    //  *
    //  * @return void
    //  */
    // public function getMarque()
    // {
    //     return $this->marque;
    // }

    // /**
    //  * Un setter ou mutateur est une méthode permettant de modifier la valeur d'une propriété private.
    //  * Ce setter est public pour rendre la valeur modifiable partout.
    //  *
    //  */
    // public function setMarque($marque)
    // {
    //     $this->marque = $marque;
    // }
}
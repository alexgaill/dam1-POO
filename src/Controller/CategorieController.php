<?php

require "../src/Model/CategorieModel.php";

class CategorieController {

    /**
     * Génère la page d'accueil
     *
     * @return void
     */
    public function home () {

        // Je charge le model associé à la table catégorie
        $model = new CategorieModel;
        // J'appelle la méthode permettant de récupérer toutes les catégories
        $categories = $model->findAll();
        // Je charge le template de la page d'accueil
        require "../src/View/home.php";
    }
}
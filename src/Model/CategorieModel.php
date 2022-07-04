<?php
require_once "../Core/Database/Database.php";

class CategorieModel {

    /**
     * Retourne toutes les catégories présentes en BDD
     *
     * @return array
     */
    public function findAll(): array
    {
        // Requête SQL
        $stmt = "SELECT * FROM categorie";

        // J'instancie la class Database pour générer la connexion à la BDD
        $db = new Database;
        $pdo = $db->getPDO();

        // Je charge ma requête
        $query = $pdo->query($stmt, PDO::FETCH_OBJ);
        // Je retourne toutes les catégories présentes dans la table
        return $query->fetchAll();
    }
}
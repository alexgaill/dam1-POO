<?php

/**
 * Gestion de la connexion à la base de données avec PDO
 */
class Database {

    /**
     * Information du serveur de BDD
     *
     * @var string
     */
    private string $host = "localhost:8889";

    /**
     * Nom de la BDD
     *
     * @var string
     */
    private string $dbname = "blog";

    /**
     * Identifiant de connexion
     *
     * @var string
     */
    private string $user = "root";

    /**
     * Password de connexion
     *
     * @var string
     */
    private string $password = "root";

    /**
     * Connexion établie ou non à la BDD
     *
     * @var PDO|null
     */
    private PDO|null $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
    }

    /**
     * Retourne la connexion à la BDD
     *
     * @return PDO|null
     */
    
    public function getPDO (): PDO|null
    {
        return $this->pdo;
    }
}
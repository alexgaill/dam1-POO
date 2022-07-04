<?php

/**
 * Class parent des animaux regroupant les informations communes
 * @author Alexandre
 */
class Animal {

    /**
     * Une class peut avoir des constantes. 
     * Une constante est un élément qui possède une valeur définie qui ne peut être changée.
     * 
     * Une constante est un élément qui appartient à la class et non à l'objet.
     * Il peut avoir une portée différente en fonction des besoins.
     */
    public const ESPECE = "Mammifère";

    public static $sport = "course";

    /**
     * Nom de l'animal
     *
     * @var string
     */
    protected string $nom;

    /**
     * Age de l'animal
     *
     * @var integer
     */
    protected int $age;

    /**
     * couleur de pelage de l'animal
     *
     * @var string
     */
    protected string $couleurPelage;

    /**
     * Cri de l'animal
     *
     * @var string
     */
    protected string $cri;

    /**
     * La méthode __construct est une méthode magique.
     * Les méthodes magique sont des méthodes appelées à certains moment de vie de l'objet ou de la class.
     * Le constructeur est appelé lorsqu'on instancie une class pour créer un objet.
     * 
     * Il permet généralement d'attribuer des valeurs aux propriétés
     *
     * @param string $nom
     * @param int $age
     * @param string $couleurPelage
     */
    public function __construct(string $nom, int $age, string $couleurPelage)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->couleurPelage = $couleurPelage;
    }

    // Une méthode d'objet peut utiliser une propriété static
    public function getSport() {
        return self::$sport;
    }

    // Une méthode static ne peut pas utilisé une propriété d'objet
    // public static function staticNom()
    // {
    //     return $this->nom;
    // }

    // Une méthode static peut utiliser une propriété static ou une constante
    public static function sportSport()
    {
        return self::$sport;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param int $age
     *
     * @return self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of couleurPelage
     *
     * @return string
     */
    public function getCouleurPelage(): string
    {
        return $this->couleurPelage;
    }

    /**
     * Set the value of couleurPelage
     *
     * @param string $couleurPelage
     *
     * @return self
     */
    public function setCouleurPelage(string $couleurPelage): self
    {
        $this->couleurPelage = $couleurPelage;

        return $this;
    }

    /**
     * Get the value of cri
     *
     * @return string
     */
    public function getCri(): string
    {
        return $this->cri;
    }

    /**
     * Set the value of cri
     *
     * @param string $cri
     *
     * @return self
     */
    public function setCri(string $cri): self
    {
        $this->cri = $cri;

        return $this;
    }
}
<?php

class Vehicule {

    protected $marque;
    protected $modele;
    protected $couleur = "rouge";
    protected $nbRoue;

    public function peindreVoiture ($couleur) {
        $this->couleur = $couleur;
    }

    /**
     * Get the value of marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     */
    public function setMarque($marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     */
    public function setModele($modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     */
    public function setCouleur($couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of nbRoue
     */
    public function getNbRoue()
    {
        return $this->nbRoue;
    }
}
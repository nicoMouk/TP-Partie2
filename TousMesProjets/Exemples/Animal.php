<?php
/**
 * Created by PhpStorm.
 * User: laurentdebize
 * Date: 2020-06-29
 * Time: 09:46
 */

class Animal
{
    //Attributs
    private $couleur;
    private $poids;

    //Constructeur : cette méthode est appelé lors de "new Animal()"
    public function __construct($couleur, $poids)
    {
        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    //Accesseurs
    public function getPoids()
    {
        return $this->poids;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    //Mutateurs
    public function setCouleur($couleur)
    {
        switch($couleur)
        {
            case 'noir':
            case 'marron':
            case 'taupe':
                $this->couleur = $couleur;
                return 0;
            default:
                echo 'couleur non valide!<br>';
                return 1;
        }
    }

    //Méthodes
    public function ajouter_un_kilo()
    {
        $this->poids = $this->poids + 1;
    }

    protected function manger_animal(Animal $animal_mange)
    {
        $this->poids += $animal_mange->poids;
        $animal_mange->poids = 0;
        $animal_mange->couleur = "";
    }
}
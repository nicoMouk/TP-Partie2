<?php


class Personne
{
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom, $prenom, $age)
    {
        $this->setnom($nom);
        $this->setprenom($prenom);
        $this->setage($age);
    }
    //Accesseurs
    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    //Mutateurs
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }

    //Méthodes
    public function vieillir()
    {
        $this->age = $this->age + 1;
        return $this->getAge();
    }

    public function JeMappel()
    {
        return "Je m appel ". $this->getNom(). " " . $this->getPrenom();
    }
}
<?php

class Utilisateur{
    private $nom;
    private $prenom;
    private $age;

    //Constructeur
    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    //Accesseurs/mutateurs
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($monNom)
    {
        $this->nom= $monNom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($monPrenom)
    {
        $this->prenom= $monPrenom;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($monAge)
    {
        if($monAge >= 0 && $monAge < 150) {
            $this->age = $monAge;
        }
    }


    public function vieillir()
    {
        $this->age++;
    }

    public function presentations()
    {
        echo 'Bonjour, je m\'appelle ' . $this->prenom . ' ' . $this->nom . ' et j\'ai ' . $this->age . ' ans.<br>';
    }

}

?>
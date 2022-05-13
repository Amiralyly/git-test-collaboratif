<?php

class Employe {
    private $nom;
    private $prenom;
    private $age;
    

    public function __construct($nom, $prenom, $age)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
    }
    
    public function direBonjour(){
        echo "Bonjour je m'appele $this->nom $this->prenom. <br>";
    }

    public function getNom(){
            return $this->nom;
    }

    public function setNom($nom){
        if(!is_string($nom))
        {
            return $this->nom = $nom;
        }
    }

    public function getPrenom(){
            return $this->prenom;
    }

    public function setPrenom($prenom){
        if(!is_string($prenom))
        {
            return $this->prenom = $prenom;
        }
    }

    public function getAge(){
            return $this->age;
    }

    public function setAge($age){
        if(!is_string($age))
        {
            return $this->age = $age;
        }
    }

}

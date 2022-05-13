<?php
require_once("./employe.php");
require_once("./idirecteur.php");

class Manager extends Employe implements Directeur
{
    public $client;

    public function __construct($nom, $prenom, $age)
    {
        $this->client = null;
        parent::__construct($nom, $prenom, $age);
    }

    public function enregistrerRDV($client)
    {
        $this->client = $client;
    }

    public function afficherRDV()
    {
        echo parent::getNom() . ", " . parent::getPrenom() . " : j'ai rendez vous avec $this->client"; 
        // ou peux faire aussi faire: 
        // " echo $this->nom, $this->prenom : j'ai rendez vous avec $this->client";
        // mais on devois changer le propriete de class Employe de private pour protected $nom; protected $prenom;
    }

}
<?php

class Eleve
{

    /**
     * Declaration des propriétés de notre class Eleve.
     * -----------------------------------------------
     */

     private $prenom,
             $nom,
             $age,
             $sexe;



    public function __construct($prenom, $nom, $age, $sexe){


    $this-> prenom = $prenom;
    $this->nom = $nom;
    $this->age = $age;
    $this->sexe = $sexe;

}
    /**********************   GETTERS  ***************************/

    public function getprenom()
    {
        return $this->prenom;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function getage()
    {
        return $this->age;
    }
    public function getsexe()
    {
        return $this->sexe;
    }

    /*********************** SETTERS ********************************/

    public function setPrenom($prenom)
    {
         $this->prenom=$prenom;
    }
    public function setnom($nom)
    {
         $this->nom=$nom;
    }
    public function setage($age)
    {
         $this->age=$age;
    }
    public function setsexe($sexe)
    {
         $this->sexe=$sexe;
    }

}

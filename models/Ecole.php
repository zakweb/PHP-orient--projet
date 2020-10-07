<?php

/**
 * une Classe PHP est une entité  regroupant par theme des variables appelées
 * des propriétés et aussi des fonctions appelées des méthodes.
 *
 *
 */
class Ecole
{

    /**
     * Declaration des propriétés de notre class Ecole.
     * -----------------------------------------------
     */
// Déclaration des propriétés de notre class Ecole.
// Private nous permet d'interdire l'accès direct aux propriétés par les objets.
//En private les propriétés sont UNIQUEMENT accessibles depuis l'intérieur de la class.'
    private $nom;
    private $adresse;
    private $capacite;
    private $type;
    private $directeur;
    private $classes ;

/*  Alors, pour permettre l'attribution de valeurs à mes propriétés, je vais
    mettre en place un CONSTRUCTEUR.
* L'objectif du constructeur c'est de remplir / d'initialiser / hydrater
* les propriétés de la classe avec des valeurs.
* IL DOIT ETRE ACCESSIBLE PUBLIQUEMENT !!!
* ----------------------------------------
*Cette fonction est executée AUTOMATIQUEMENT par PHP au moment de l'instanciation de la classe. */

    public function __construct($nom, $adresse, $capacite, $type, $directeur){
//En Symfony, la class construtor n'existe pas mais elle est remplacé par le setter.

/* La propriété "nom" de classe ( $this->nom ) prend comme valeur, la valeur de la variable ( $nom ) passée en paramètre au moment de l'instanciation.
          $this se réfère à votre objet
    */

    $this-> nom = $nom;
    $this->adresse = $adresse;
    $this->capacite = $capacite;
    $this->type = $type;
    $this->directeur = $directeur;
    $this->classe =[];
}
    /**********************   GETTERS  ***************************/
//    Pour aller recupérer les données  et les retourner pour obtenir le contrôle.
    public function getNom()
    {
        return $this->nom;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getCapacite()
    {
        return $this->capacite;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getDirecteur()
    {
        return $this->directeur;

    }
//Ajout du tableau de l'ecole comprenant les classes //
    /**
     * @return array
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param array $classe
     */
    public function setClasses($classes)
    {
        $this->classes [] = $classes;
    }
    public function addclasse(Classe$classe){
        $this->classes[] = $classe;
    }


    /*********************** SETTERS ********************************/
//    Pour modifier les données
    public function setNom($nom)
    {
         $this->nom=$nom;
    }
    public function setAdresse($adresse)
    {
         $this->adresse=$adresse;
    }
    public function setCapacite($capacite)
    {
         $this->capacite=$capacite;
    }
    public function setType($type)
    {
         $this->type=$type;
    }
    public function setDirecteur($directeur)
    {
         $this->directeur=$directeur;
    }
}

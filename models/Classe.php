<?php



class Classe
{

    /**
     * Declaration des propriétés de notre class Classe.
     * -----------------------------------------------
     */

    private $nom,
            $capacite,
            $professeurP,
            $eleves;


    public function __construct($nom, $capacite, $professeurP){
// on ne remplit pas le tableau avec des eleves puisque ce n'est pas définitif//
        $this-> nom = $nom;
        $this->capacite = $capacite;
        $this->professeurP = $professeurP;
        $this->eleves= [];

    }
    /**********************   GETTERS  ***************************/


    public function getNom()
    {
        return $this->nom;
    }
    public function getCapacite()
    {
        return $this->capacite;
    }
    public function getProfesseurP()
    {
        return $this->professeurP;
    }
////////////   AJOUT des eleves dans la classe sous forme de tableau/////////
    /**
     * @return array
     */
    public function getEleves()
    {
        return $this->eleves;
    }

    /**
     * @param array $eleves
     */
    public function setEleves($eleves)
    {
        $this->eleves = $eleves;
    }
//    on ajoute la class Eleve devant la variable eleve pour securiser l'affichage//
// RECOMMANDE dans la declaration //
    public function addeleve(Eleve$eleve)
    {
        $this->eleves[] = $eleve;
    }
    /*********************** SETTERS ********************************/


    public function setNom($nom)
    {
        $this->nom=$nom;
    }
    public function setCapacite($capacite)
    {
        $this->capacite=$capacite;
    }
    public function setprofesseurP($professeurP)
    {
        $this->professeurP=$professeurP;
    }
}

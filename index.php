<?php

//Importation de notre class Ecole
require_once 'models/Ecole.php';
require_once 'models/Eleve.php';
require_once 'models/Classe.php';

//Création d'une instance de la class Ecole
//Notre variable $ecole est un objet de cette class.
//Cet objet a accès aux propriétés et méthodes dde la class.

//Instance des fonctions: Création d'un objet avec des fonctions et des valeurs.


//$ecole = new Ecole();
//$ecole->nom ="Web Force 3";
//$ecole->directeur="Sylviane Perez";
//$ecole->type="Centre de Formation";
//$ecole->adresse="9,rue G.L'Asnier,75004 Paris";
//$ecole->capacite="20";
$ecole= new Ecole(
    'WF3','9 rue Geoffroy L\'Asnier,75004 Paris',18,'Formation','Hugo LIEGEARD');

//$ecole2 = new Ecole();
//$ecole2->nom ="Ecole 42";
//$ecole2->adresse = "Boulevard de Clichy, 75017 Paris";
//$ecole2->capacite ="200";
//$ecole2->type ="Formation";
//$ecole2->directeur="Xavier Niel";

$ecole2 = new Ecole(
    'LePoleS','11 Allée St-Exupéry,92390 Villenuve -La-Garenne',20,'formation','Claude Sicart');


$eleve = new Eleve(
    'Pierre','Giordani',12,'m');

echo '<h1>'.$eleve->getprenom().'</h1>';
echo '<h1>'.$eleve->getnom().'</h1>';
echo '<h1>'.$eleve->getage().'</h1>';
echo '<h1>'.$eleve->getsexe().'</h1>';


//Des valeurs sont hydratées lorsqu'elles sont remplies
//echo'<pre>' ;print_r( $ecole) ; echo '</pre>';
//echo'<pre>' ;print_r( $ecole2) ; echo '</pre>';

// Affichage du nom de l'ecole dans une balise h1
//echo '<h1>'.$ecole->nom.'</h1>';
//echo '<h1>'.$ecole2->nom.'</h1>';
////////////  RECUPERATION ET MODIFICATION  /////////

//Le getter permet de recuperer les données et les donne en accès à l'objet//

//echo '<h1>'.$ecole-> getNom().'</h1>';
//echo '<h1>'.$ecole->getAdresse().'</h1>';
//echo '<h1>'.$ecole->getDirecteur().'</h1>';
//echo '<h1>'.$ecole->getType().'</h1>';

//Le setter permet de modifier les données et donne l'accès à l'objet//

//$ecole->setNom('WF3 PARIS');
//echo '<h1>'.$ecole-> getNom().'</h1>';





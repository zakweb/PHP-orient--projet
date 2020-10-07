<?php

//Importation de nos class:
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


$eleve1 = new Eleve('Pierre-Louis','Giordani',12,'m');
$eleve2 = new Eleve('Zaklin','Pocandi',49,'f');
$eleve3 = new Eleve('Laurent','Giordani',50,'m');

echo '<h1>'.$eleve1->getprenom().'</h1>';
echo '<h1>'.$eleve1->getnom().'</h1>';
echo '<h1>'.$eleve1->getage().'</h1>';
echo '<h1>'.$eleve1->getsexe().'</h1>';

echo'<pre>' ;print_r( $eleve1) ; echo '</pre>';
echo'<pre>' ;print_r( $eleve2) ; echo '</pre>';
echo'<pre>' ;print_r( $eleve3) ; echo '</pre>';


$front = new Classe('Front',18,'Fadhi NASRI');
$back = new Classe ('back',18,'Mathieu QUITTARD');
$full = new Classe('full',18,'Hugo LIEGEARD');

echo '<h1>'.$front->getnom().'</h1>';
echo '<h1>'.$front->getCapacite().'</h1>';
echo '<h1>'.$front->getProfesseurP().'</h1>';

echo'<pre>' ;print_r( $front) ; echo '</pre>';
echo'<pre>' ;print_r( $back) ; echo '</pre>';
echo'<pre>' ;print_r( $full) ; echo '</pre>';


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

//Affecter chaque eleve dans une classe?
$eleve1 = new Eleve('Pierre-Louis','Giordani',12,'m');
$eleve2 = new Eleve('Zaklin','Pocandi',49,'f');
$eleve3 = new Eleve('Laurent','Giordani',50,'m');

$front->addeleve($eleve1);
$front->addeleve($eleve2);

$back->addeleve($eleve3);

echo'<pre>' ;print_r( $front) ; echo '</pre>';

//Plusieurs objets dans un tableau est une collection;
//chaque objet s'imbrique' comme une inception.


//Affecter chaque classe dans une ecole?


$ecole->addclasse($front);
$ecole->addclasse($back);
$ecole->addclasse($full);

echo'<pre>' ;print_r($ecole) ; echo '</pre>';


/* --CONSIGNE : En partant de l'objet $ecole ; affichez la liste
    ol, ul, li des classes et pour chaque classe,la liste des élèves.-- */

$classes = $ecole->getClasses();
echo '<ol>';

/** @var Classe $classe */
foreach ($classes as $classe) {
# Afficher le nom de la classe
    echo '<li>';echo $classe->getNom();echo '</li>';
# Recup et Affichage la liste des eleves
 $eleves = $classe->getEleves();

    echo '<ul>';
/** @var  $eleve */
    foreach ($eleves as $eleve) {

    echo '<li>';echo $eleve->getPrenom(). ' ' .$eleve->getNom();echo '</li>';
    }

    echo '</ul>';
}
echo '</ol>';

echo'<table border="1" style ="border-collapse:collapse; width:50%; margin:0 auto">';
echo'<tr>';

for ($i=0;$i<10;$i++){
    echo '<td>'.$i.'</td>';

}



echo '</tr>';
echo '</table>';


<?php


include('Utilisateur.php');

$camille = new Utilisateur('Aubert', 'Camille', 23);
$camille->presentations();
$camille->vieillir();
$camille->presentations();

$antoine = new Utilisateur('Potin', 'Antoine', 34);
$antoine->setNom('Pot-au-feu');
$antoine->setPrenom('Антон');
$antoine->setAge(28);
echo 'Nom : ' . $antoine->getNom() . '<br>';
echo 'Prénom : ' . $antoine->getPrenom() . '<br>';
echo 'age : ' . $antoine->getAge() . '<br>';

?>
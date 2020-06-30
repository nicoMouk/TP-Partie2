<?php

include('Personne.php');

$personne = new Personne('KLEIN', 'Coni', 34);
echo $personne->getAge(). "<br>";
echo $personne->vieillir(). "<br>";
echo $personne->JeMappel();

?>
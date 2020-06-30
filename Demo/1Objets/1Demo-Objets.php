<?php

include('Animal.php');

//Instanciation d'un objet
$chien = new Animal('Roux', 50);
echo 'Poids du chien : ' . $chien->getPoids() . ' kg <br>';
$chien->ajouter_un_kilo();
echo 'Poids du chien qui grossit : ' . $chien->getPoids() . ' kg <br>';

$chat = new Animal('blanc à taches rousses', 5);
echo 'couleur du chat : ' . $chat->getCouleur() . '<br>';
$chat->setCouleur('noir');
echo 'couleur du chat : ' . $chat->getCouleur() . '<br>';
$chat->setCouleur('vert');
echo 'couleur du chat : ' . $chat->getCouleur() . '<br>';

echo 'Poids du chien : ' . $chien->getPoids() . ' kg <br>';
echo 'Poids du chat : ' . $chat->getPoids() . ' kg <br>';
$chien->manger_animal($chat);
echo 'Le chien mange le chat !<br>';
echo 'Poids du chien : ' . $chien->getPoids() . ' kg <br>';
echo 'Poids du chat : ' . $chat->getPoids() . ' kg <br>';
?>
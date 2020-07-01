<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ma_base; charset=utf8', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
//127.0.0.1 a la place du localhost en cas de problem de Co//

?>


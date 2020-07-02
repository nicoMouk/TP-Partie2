<?php

// Connexion à la base de données et début de la session

session_start();

$user = "root";
$pass = "root";

try {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=login_password;charset=utf8', $user, $pass);
} catch (Exception $e) {
    die ('Erreur : ' . $e->getMessage());
}

if (isset($_POST['mdp']) && !empty($_POST['mdp']) &&
    isset($_POST['mdp_verif']) && !empty($_POST['mdp_verif']) &&
    isset($_POST['delete_compte']) && !empty($_POST['delete_compte']) &&
    $_POST['mdp'] == $_POST['mdp_verif']) {

    $login = strip_tags($_COOKIE['pseudo']);
    $mdp = strip_tags($_POST['mdp']);

    $clear = $bdd->prepare('DELETE FROM login_password WHERE login = ? AND password = ?');
    $clear->execute(array($login, $mdp));

    $_SESSION['compte'] = 'Delete';

    setcookie('pseudo', '', time() - 4242);
    header('location:TP8_login.php');

} else {
    echo 'Erreur ! Suppression impossible ! Redirection...';
    header('refresh:3;url=TP8_compte.php');
}

?>
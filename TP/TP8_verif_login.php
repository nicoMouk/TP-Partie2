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

if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['mdp']) && !empty($_POST['mdp'])) {

    $login = strip_tags($_POST['login']);
    $mdp = strip_tags($_POST['mdp']);
    if (isset($_POST['save_login'])) {
        $save = strip_tags($_POST['save_login']);
        setcookie('save_pseudo', $save, time() + 365 * 24 * 3600, null, null, false, true);
    } else {
    }
//vérification du login et mot de passe
    $verif_login = $bdd->prepare('SELECT * FROM login_password WHERE login = ? AND password = ?');
    $verif_login->execute(array($login, $mdp));
    if ($verif_login->fetch()) {
        $_SESSION['login'] = $login;
        setcookie('pseudo', $login, time() + 365 * 24 * 3600, null, null, false, true);
        header('location:TP8_compte.php');
    } else {
        $_SESSION['login'] = 'Incorrect';
        header('location:TP8_login.php');
    }

} else {
    echo 'Login ou mot de passe incorrect';
    header('refresh:2;url=TP8_login.php');
}
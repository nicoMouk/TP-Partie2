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

if (isset($_POST['login']) && !empty($_POST['login']) &&
    isset($_POST['mdp']) && !empty($_POST['mdp']) &&
    isset($_POST['mdp_verif']) && !empty($_POST['mdp_verif']) &&
    $_POST['mdp'] == $_POST['mdp_verif']) {

    $login = strip_tags($_POST['login']);
    $mdp = strip_tags($_POST['mdp']);

    $verif_login = $bdd->prepare('SELECT * FROM login_password WHERE login = ?');
    $verif_login->execute(array($login));
    $count = $verif_login->rowCount();

    if ($count > 0) {
        $_SESSION['login'] = 'Used';
        header('location:TP8_inscription.php');
    } else { // Sinon le nouvel utilisateur est inscrit
        $inscription = $bdd->prepare('INSERT INTO login_password (login, password) VALUES (:login, :password)');
        $inscription->execute(array('login' => $login, 'password' => $mdp));
        $_SESSION['login'] = 'Inscrit';
        header('location:TP8_login.php');
    }

} else {
    $_SESSION['mdp'] = 'Incorrect';
    header('location:TP8_inscription.php');
}
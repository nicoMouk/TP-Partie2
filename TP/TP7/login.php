<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="text-center">
<!--<button type="button" class="btn btn-primary">Primary</button>
<form method="post" action="verif login".php">
    <p><strong>Connexion</strong></p>
    <p><label for="Identifiant">Identifiant : </label><input type="text" name="Identifiant" id="Identifiant"></p>
    <p><label for="Mot de passe">Mot de passe : </label><input type="text" name="Mot de passe" id="Mot de passe"></p>
    <p><textarea name="message" rows="8" cols="45" placeholder="Votre message">
        </textarea></p>
    <p><input type="checkbox" name="HTML" id="HTML">
        <label for="HTML">HTML</label><br>
        <input type="checkbox" name="CSS" id="CSS">
        <label for="CSS">CSS</label>
    </p>
    <p><input type="submit" value="Vérifier"></p>
</form>-->
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="mt-5">
                <div class="card-body">
                    <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Identifiant</label>
                            <input name="Identifiant" type="Identifiant" class="form-control" id="Identifiant"
                                   aria-describedby="Identifiant" placeholder="Identifiant" required>
                            <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>

<?php
session_start();

$_SESSION['nom'] = 'Dupont';

$login_valide = "Dupont";
$pwd_valide = "alibaba";

if (isset($_POST['login']) && isset($_POST['pwd'])) {

    // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
    if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {

        session_start();
        // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd)
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pwd'] = $_POST['pwd'];

        // on redirige notre visiteur vers une page de notre section membre
        header('verif login.php');
    } else {
        // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        // puis on le redirige vers la page d'accueil
        echo '<meta http-equiv="refresh" content="0;URL=index.htm">';
    }
} else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>

<?php
//On vérifie que les variables existent et sont non-vides
/*if(isset($_POST['repeter']) && !empty($_POST['repeter']) && isset($_POST['prenom']) && !empty($_POST['prenom']))
{
    //on s'assure d'avoir un entier
    $_POST['Identifiant'] = (int) $_POST['Identifiant'];
    //on bani les grands nombres
    if ($_POST['repeter'] >=1 and $_POST['repeter'] <= 100){
        $double = 2*$_POST['repeter'];
        echo 'Double de votre nombre : ' . $double . '<br>';
        for($i = 0; $i < $double; $i++)
        {
            echo '<p>Bonjour '. $_GET['prenom'] .' !</p>';
        }
    }

}*/
?>
</body>
</html>

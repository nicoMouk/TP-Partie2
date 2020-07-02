<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TP8 - SQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
<!--formulaire de connection-->
<div class="container">

    <h2>Connexion</h2>

    <br>
    <form action="TP8_verif_login.php" method="post">

        <label for="login">Entrez votre identifiant :</label>
        <input type="text" name="login" id="login" class="form-control" placeholder="Login"
               value="<?php if (!empty($_COOKIE['pseudo']) && !empty($_COOKIE['save_pseudo'])) {
                   echo $_COOKIE['pseudo'];
                   unset($_SESSION['save_login']);
               } else {
               } ?>" required/>

        <hr>

        <label for="mdp">Entrez votre mot de passe :</label>
        <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Mot de passe" required/>
        <br>
        <input type="submit" class="btn btn-success" value="Connexion">

    </form>

    <br>
    <a href="TP8_inscription.php" class="btn btn-info">Inscription</a>
</div>

<?php

if (isset($_SESSION['login']) and $_SESSION['login'] == 'Incorrect') { ?>

    <script type="text/javascript">
        alert('Login ou mot de passe invalide. Vérifiez vos informations ou créer un compte.');
    </script>

<?php unset($_SESSION['login']);
}
else if (isset($_SESSION['login']) and $_SESSION['login'] == 'Inscrit'){ ?>

    <script type="text/javascript">

        alert('Vous êtes maintenant inscrit ! Vous pouvez vous connectez !');

    </script>

<?php unset($_SESSION['login']);
}
else if (isset($_SESSION['compte']) and $_SESSION['compte'] == 'Delete') { ?>

    <script type="text/javascript">

        alert('Votre compte a bien été supprimé. Vous pouvez en créer un nouveau !');

    </script>

<?php unset($_SESSION['compte']);
}
else if (isset($_SESSION['cookie']) && $_SESSION['cookie'] == 'NotExist') { ?>

    <script type="text/javascript">

        alert('Vous ne vous êtes pas identifié. Retour à la page de connexion !');

    </script>

<?php }
unset($_SESSION['cookie']);

?>

</body>
</html>

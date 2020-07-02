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

<div class="container">
    <?php ?>
    <h2>Inscription</h2>

    <form action="TP8_inscription_sql.php" method="post"
    <br>
    <label for="login">Créez votre identifiant :<em>*</em></label>
    <input type="text" name="login" id="login" class="form-control" placeholder="Login" required/>

    <hr>
    <label for="mdp">Entrez votre mot de passe : (1 chiffre, 1 majuscule et 1 minuscule requis)<em>*</em></label>
    <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Mot de passe" required
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,16}"/>
    <br>
    <label for="mdp_verif">Entrez à nouveau votre mot de passe :<em>*</em></label>
    <input type="password" name="mdp_verif" id="mdp_verif" class="form-control" placeholder="Mot de passe" required
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,16}"/>
    <br>

    <input type="submit" class="btn btn-success" value="S'inscrire"/>

    </form>
    <hr>
    <a href="TP8_login.php" class="btn btn-info">Retour vers Connexion</a>
</div>

<?php

if (isset($_SESSION['login']) and $_SESSION['login'] == 'Used') { ?>

    <script type="text/javascript">

        alert('Login déjà utilisé. Veuillez en choisir un autre.');

    </script>

<?php unset($_SESSION['login']);
}
else if (isset($_SESSION['mdp']) and $_SESSION['mdp'] == 'Incorrect') { ?>

    <script type="text/javascript">

        alert('Mot de passe non identiques ! Essayez à nouveau !');

    </script>

    <?php unset($_SESSION['mdp']);
} else {
} ?>

</body>
</html>
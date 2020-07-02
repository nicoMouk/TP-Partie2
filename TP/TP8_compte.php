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

<?php if (!isset($_COOKIE['pseudo']) || empty($_COOKIE['pseudo'])) {
    $_SESSION['cookie'] = 'NotExist';
    header('location:TP8_login.php');
} else {
    ?>

    <div class="container">

        <h2>Votre compte</h2>

        <br>

        <h3>Login : <span><?php echo $_COOKIE['pseudo']; ?></span></h3>

        <hr>

        <h3>Effacez votre compte ?</h3>

        <form action="TP8_clear_compte.php" method="post">

            <label for="mdp">Entrez votre mot de passe :</label>
            <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe" required/>

            <br>

            <label for="mdp_verif">Entrez à nouveau votre mot de passe :</label>
            <input type="password" class="form-control" name="mdp_verif" id="mdp_verif" placeholder="Mot de passe"
                   required/>

            <br>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="delete_compte" id="delete_compte"
                       value="delete_compte">
                <label class="custom-control-label" for="delete_compte">Je suis sûr de vouloir supprimer mon
                    compte</label>
            </div>

            <br>

            <input type="submit" class="btn btn-danger" value="Effacer le compte"/>

        </form>

        <hr>

        <div class="row">
            <div class="col-md-5">
                <a href="TP8_login.php" class="btn btn-success">Déconnexion</a>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <?php if (isset($_COOKIE['save_pseudo']) && !empty($_COOKIE['save_pseudo'])) { ?>
                    <a href="TP8_cookie.php" class="btn btn-success">Déconnexion et Oublier mon identifiant</a>
                <?php } else {
                } ?>
            </div>
        </div>


    </div>

<?php } ?>

</body>
</html>
<?php
session_start();

$_SESSION['arcticle'] = 42;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GET</title>
</head>
<body>
<form method="post" action="cible.php">
    <p>Remplissez les champs :</p>
    <p><label for="prenom">Prénom : </label><input type="text" name="prenom" id="prenom"></p>
    <p><textarea name="message" rows="8" cols="45" placeholder="Votre message">
        </textarea></p>
    <p><input type="checkbox" name="HTML" id="HTML">
        <label for="HTML">HTML</label><br>
        <input type="checkbox" name="CSS" id="CSS">
        <label for="CSS">CSS</label>
    </p>
    <p>
        <input type="radio" name="sexe" value="Homme">
        <label for="Homme">Homme</label><br>
        <input type="radio" name="sexe" value="Femme">
        <label for="Femme">Femme</label><br>
    </p>
    <p><input type="submit" value="Valider"></p>
</form>
</body>
</html>

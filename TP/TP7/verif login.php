<!DOCTYPE html>
<html>
<head>
    <title>Exercice PHP</title>
</head>
<body>
<p><a href="login.php" ?Identifiant=Gaston&amp>Cliquez ici !</a></p>

<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

    // On teste pour voir si nos variables ont bien été enregistrées
    echo '<html>';
    echo '<head>';
    echo '<title>Page de notre section membre</title>';
    echo '</head>';

    echo '<body>';
    echo 'Votre login est ' . $_SESSION['login'] . ' et votre mot de passe est ' . $_SESSION['pwd'] . '.';
    echo '<br />';

    // On affiche un lien pour fermer notre session
    echo '<a href="./logout.php">Déconnection</a>';
} else {
    echo 'Les variables ne sont pas déclarées.';
}
?>
<?php
/*
echo 'Je récupère les données du formulaire<br>';

echo 'Bonjour '. htmlspecialchars($_POST['Identifiant']) . "<br>";

if(isset($_POST['Identifiant']))
{
    echo 'Votre identifiant esy :'. $_POST(Identifiant) ."<br>";
}
/*else
{
    echo 'Vous ne connaissez pas le HTML<br>';
}
if(isset($_POST['CSS']))
{
    echo 'Vous connaissez le CSS<br>';
}
else
{
    echo 'Vous ne connaissez pas le CSS<br>';
}
switch ($_POST['sexe'])
{
    case 'Homme' :
        echo 'Bonjour Monsieur';
        break;
    case 'Femme' :
        echo 'Bonjour Madame';
        break;
}
*/
?>

</body>
</html>

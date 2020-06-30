<?php

echo 'Je récupère les données du formulaire<br>';

echo 'Bonjour '. htmlspecialchars($_POST['prenom']) . "<br>";

if(isset($_POST['HTML']))
{
    echo 'Vous connaissez le HTML<br>';
}
else
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

?>

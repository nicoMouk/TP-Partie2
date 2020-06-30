<?php

$double = $_GET["repeter"] * 2;

    echo "la valeur a repeter est : " .$_GET["repeter"]. "<br>";
    echo "Le prenom reçu est : " .$_GET["prenom"]."<br>";
    echo "La valeur double du double est : " .$double . "<br>";

for ($i = 1; $i <= $double; $i++)
{
    echo 'Bonjour ' .$_GET["prenom"]."<br>";
}

if (isset($_GET["repeter"], $_GET["prenom"]))
{
    echo "Variables 'double et prenom' sont set" . "<br>";
}

?>
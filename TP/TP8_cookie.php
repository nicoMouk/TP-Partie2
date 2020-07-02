<?php

session_start();

//Duree de vie des cookies
setcookie('pseudo', '', time() - 3600);
setcookie('save_pseudo', '', time() - 3600);

header('Location:TP8_login.php');

?>
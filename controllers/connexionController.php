<?php
session_start(); //cette ligne et celle d'après à retirer si mis dans un autre controller
require '../models/model.php';

require '../models/connexionModel.php';

if (isset($_POST["email"]) && isset($_POST["pwd"])) {
    $email = htmlspecialchars($_POST["email"]);
    $pwd =  password_hash(htmlspecialchars($_POST["pwd"]), PASSWORD_BCRYPT);

    connectionSite($email, $pwd);
    echo "connect " . $_SESSION['user'];
}

require '../views/connexionView.php';
?>
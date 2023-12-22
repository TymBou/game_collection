<?php
session_start();

require './models/connexionModel.php';

if (isset($_POST["email"]) && isset($_POST["pwd"])) {
    $email = htmlspecialchars($_POST["email"]);
    $pwd =  password_hash(htmlspecialchars($_POST["pwd"]), PASSWORD_BCRYPT);

    connectionSite($email, $pwd);
}
?>
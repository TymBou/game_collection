<?php
require './models/connexionModel.php';

$message = '';
$email = '';
if (isset($_POST["email"]) && isset($_POST["pwd"])) {
    $email = htmlspecialchars($_POST["email"]);
    $pwd =  htmlspecialchars($_POST["pwd"]);

    connectionSite($email, $pwd);

    if (isset($_SESSION['user'])) {
        $fName = select("SELECT prenom FROM utilisateur WHERE idUtil = " . $_SESSION['user'])[0]['prenom'];
        $message = "Bienvenue " . $fName;
        header("Refresh: 3; url=/game_collection/?dir=profil");
    } else {
        $message = "Mauvais email/mot de passe";
    }
}

require './views/connexionView.php';
?>
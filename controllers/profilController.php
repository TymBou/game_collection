<?php
require './models/profilModel.php';

$infos = select("SELECT nomUtil, prenom, email FROM utilisateur WHERE idUtil = " . $_SESSION['user'])[0];

$message = '';
$lName = $infos['nomUtil'];
$fName = $infos['prenom'];
$email = $infos['email'];

if ($dir == 'profilFormulaire') {
    if (isset($_POST["lastName"]) && isset($_POST["firstName"]) && isset($_POST["email"]) && isset($_POST["pwd"]) && isset($_POST["pwdConf"])) {
        $lName = htmlspecialchars($_POST["lastName"]);
        $fName = htmlspecialchars($_POST['firstName']);
        $email = htmlspecialchars($_POST['email']);
        $pwd = htmlspecialchars($_POST["pwd"]);
        $pwdConf = htmlspecialchars($_POST["pwdConf"]);
    
        $message = testData($email, $pwd, $pwdConf, $lName, $fName);
        if(!$message) {
            $pwdHash = password_hash($pwd, PASSWORD_BCRYPT);
            updateUser($email, $pwdHash, $lName, $fName);
            $message = 'compte modifié avec succès';
    
            header("Refresh: 3; url=/game_collection/?dir=profil");
        }
    }
}


if(isset($_GET['action'])) {
    $action = htmlspecialchars($_GET['action']);
    $deconnection = false;

    if($action == 'supprimer') {
        deleteUser();
        $deconnection = true;

    } if($action == 'deconnecter' || $deconnection) {
        unset($_SESSION['user']);
        header('Location:/game_collection');
    }
}


if ($dir == 'profil') {
    require './views/profilView.php';
} elseif ($dir == 'profilFormulaire') {
    require './views/profilFormulaireView.php';
}
?>
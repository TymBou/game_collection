<?php

$infos = select("SELECT nomUtil, prenom, email FROM utilisateur WHERE idUtil = " . $_SESSION['user'])[0];

$message = '';
$lName = $infos['nomUtil'];
$fName = $infos['prenom'];
$email = $infos['email'];

if(isset($_GET['action'])) {
    $action = htmlspecialchars($_GET['action']);

    if($action == 'supprimer') {

    } elseif($action == 'deconnecter') {
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
<?php

$_SESSION['user'] = 5;

$infos = select("SELECT nomUtil, prenom, email FROM utilisateur WHERE idUtil = " . $_SESSION['user'])[0];

$lName = $infos['nomUtil'];
$fName = $infos['prenom'];
$email = $infos['email'];

if(isset($_GET['action'])) {
    $action = htmlspecialchars($_GET['action']);
    if($action == 'modifier') {
        
    } elseif($action == 'supprimer') {

    } elseif($action == 'deconnecter') {
        session_destroy();
        session_unset();
    }
}

require './views/profilView.php';
?>
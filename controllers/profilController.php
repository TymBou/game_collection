<?php

$infos = select("SELECT nomUtil, prenom, email FROM utilisateur WHERE idUtil = " . $_SESSION['user'])[0];

$lName = $infos['nomUtil'];
$fName = $infos['prenom'];
$email = $infos['email'];

if(isset($_GET['action'])) {
    $action = htmlspecialchars($_GET['action']);
    if($action == 'modifier') {
        
    } elseif($action == 'supprimer') {

    } elseif($action == 'deconnecter') {
        unset($_SESSION['user']);
        header('Location:/game_collection');
        var_dump($_SESSION);
        }
}
require './views/profilView.php';
?>
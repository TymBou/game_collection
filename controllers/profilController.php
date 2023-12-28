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
        echo 'test1';
        unset($_SESSION['user']);
        header('Location:index.php');
        var_dump($_SESSION);
        }
    echo 'test2';
}
echo 'test3';
require './views/profilView.php';
?>
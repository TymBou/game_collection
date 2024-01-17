<?php
if(!isset($_SESSION['user']) && !isset($_GET['dir'])) {
    require('controllers/connexionController.php');

} elseif (isset($_GET['dir'])){
    $dir = htmlspecialchars($_GET['dir']);

    if ($dir == 'inscription') {
        require('controllers/inscriptionController.php');
    } elseif ($dir == 'profil' || $dir == 'profilFormulaire') {
        require("views/headerView.php");
        require('controllers/profilController.php');
    } elseif($dir == 'update') {
        require("views/headerView.php");
        require('controllers/updateJeuController.php');
    } elseif ($dir == 'recherche') {
        require("views/headerView.php");
        require('controllers/rechercheController.php');
    } elseif ($dir == 'creerJeu') {
        require("views/headerView.php");
        require('controllers/creerJeuController.php');
    }elseif ($dir == 'classement') {
        require("views/headerView.php");
        require('controllers/classementController.php');
    }
    
}else {
    require("views/headerView.php");
    require('controllers/acceuilController.php');
}
require("views/footerView.php");
?>
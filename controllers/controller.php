<?php
if(!isset($_SESSION['user']) && !isset($_GET['dir'])) {
    require('controllers/connexionController.php');

} elseif (isset($_GET['dir'])){
    $dir = htmlspecialchars($_GET['dir']);

    if ($dir == 'inscription') {
        require('controllers/inscriptionController.php');
    } elseif ($dir == 'profil' || $dir == 'profilFormulaire') {
        require('controllers/profilController.php');
    } elseif($dir == 'update') {
        require('controllers/updateJeuController.php');
    } elseif ($dir == 'recherche') {
        require('controllers/rechercheController.php');
    } elseif ($dir == 'creerJeu') {
        require('controllers/creerJeuController.php');
    }
    
}else {
    require('controllers/acceuilController.php');
}
?>
<?php
if(!isset($_SESSION['user']) && !isset($_GET['dir'])) {
    require('controllers/connexionController.php');

} elseif (isset($_GET['dir'])){
    $dir = htmlspecialchars($_GET['dir']);

    if ($dir == 'inscription') {
        require('controllers/inscriptionController.php');
    } elseif ($dir == 'profil') {
        require('controllers/profilController.php');
    }

} else {
    require('controllers/rechercheController.php');
}
?>
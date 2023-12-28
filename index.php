<?php
session_start();
require('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require './models/model.php';

if(!isset($_SESSION['user']) && !isset($_GET['dir'])) {
    require('controllers/connexionController.php');

} elseif (isset($_GET['dir'])){
    $dir = htmlspecialchars($_GET['dir']);

    if ($dir == 'inscription') {
        require('controllers/inscriptionController.php');
    }

} else {
    require('controllers/profilController.php');
}

?>

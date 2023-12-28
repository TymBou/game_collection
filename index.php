<?php
session_start();
require('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require './models/model.php';

if(!isset($_SESSION['user'])) {
    require('controllers/connexionController.php');
} else {
    require('controllers/profilController.php');
}

?>

<?php
session_start();
require('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require './models/model.php';

require './controllers/controller.php';
?>

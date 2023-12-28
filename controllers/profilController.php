<?php

$_SESSION['user'] = 5;

$infos = select("SELECT nomUtil, prenom, email FROM utilisateur WHERE idUtil = " . $_SESSION['user'])[0];

$lName = $infos['nomUtil'];
$fName = $infos['prenom'];
$email = $infos['email'];

require './views/profilView.php';
?>
<?php
require './models/model.php';

require './models/connexionModel.php';

if (isset($_POST["email"]) && isset($_POST["pwd"])) {
    $email = htmlspecialchars($_POST["email"]);
    $pwd =  htmlspecialchars($_POST["pwd"]);

    connectionSite($email, $pwd);
    echo "connect " . $_SESSION['user'];
    header("Refresh: 4; url=unepage.php");
}

require './views/connexionView.php';
?>
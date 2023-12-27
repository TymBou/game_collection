<?php
require './models/model.php';

require './models/inscriptionModel.php';

$message = '';
if (isset($_POST["lastName"]) && isset($_POST["firstName"]) && isset($_POST["email"]) && isset($_POST["pwd"]) && isset($_POST["pwdConf"])) {
    $lName = htmlspecialchars($_POST["lastName"]);
    $fName = htmlspecialchars($_POST['firstName']);
    $email = htmlspecialchars($_POST['email']);
    $pwd = htmlspecialchars($_POST["pwd"]);
    $pwdConf = htmlspecialchars($_POST["pwdConf"]);

    $message = testData($email, $pwd, $pwdConf, $lName, $fName);
    if(!$message) {
        $pwd = password_hash($pwd);
        insertUser($email, $pwd, $lName, $fName);

        header("Refresh: 4; url=unepage.php");
    }
}


require './views/inscriptionView.php';
?>
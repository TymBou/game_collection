<?php
require './models/model.php';

require './models/inscriptionModel.php';

$message = '';

$lName = '';
$fName = '';
$email = '';
$pwd = '';
$pwdConf = '';

if (isset($_POST["lastName"]) && isset($_POST["firstName"]) && isset($_POST["email"]) && isset($_POST["pwd"]) && isset($_POST["pwdConf"])) {
    $lName = htmlspecialchars($_POST["lastName"]);
    $fName = htmlspecialchars($_POST['firstName']);
    $email = htmlspecialchars($_POST['email']);
    $pwd = htmlspecialchars($_POST["pwd"]);
    $pwdConf = htmlspecialchars($_POST["pwdConf"]);

    $message = testData($email, $pwd, $pwdConf, $lName, $fName);
    if(!$message) {
        $pwdHash = password_hash($pwd, PASSWORD_BCRYPT);
        insertUser($email, $pwdHash, $lName, $fName);
        $message = 'compte créé avec succès';

        header("Refresh: 4; url=unepage.php");
    }
}


require './views/inscriptionView.php';
?>
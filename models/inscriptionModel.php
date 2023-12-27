<?php
function insertUser($email, $pwd, $nomUtil, $prenom)
{
    $idUtil = getMaxIdUser()+1;
    executeQuery("INSERT INTO utilisateur VALUES ('$idUtil','$email','$pwd','$lName','$fName')");
}

function testData($email, $pwd, $pwdConf, $lName, $fName)
{
    if ($email && $pwd && $pwdConf && $lName && $fName) {
        return 'champs vides';

    } elseif ($pwd == $pwdConf) {
        return 'mots de passe differents';

    } elseif (notAlreadyUsedEmail($email)) {
        return 'email déjà utilisé';
    }
}

function notAlreadyUsedEmail($email)
{
    $emails = select('SELECT email FROM utilisateur');
    foreach ($emails as $value) {
        $anEmail = $value["email"];
        if ($anEmail == $email) {
            return false;
        }
    }
    return true;
}
?>
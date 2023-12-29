<?php
function updateUser($email, $pwd, $lName, $fName)
{
    $idUtil = $_SESSION['user'];
    executeQuery("UPDATE utilisateur SET email = '$email', mdp = '$pwd', nomUtil = '$lName', prenom = '$fName' WHERE idUtil = $idUtil");
}

function deleteUser()
{
    $idUtil = $_SESSION['user'];
    executeQuery("DELETE FROM utilisateur WHERE idUtil = $idUtil");
}

function testData($email, $pwd, $pwdConf, $lName, $fName)
{
    if (!($email && $pwd && $pwdConf && $lName && $fName)) {
        return 'champs vides';

    } elseif (!($pwd == $pwdConf)) {
        return 'mots de passe differents';

    } elseif (AlreadyUsedEmail($email)) {
        return 'email déjà utilisé';

    } else {
        return '';
    }
}

function AlreadyUsedEmail($email)
{
    $emails = select('SELECT email, idUtil FROM utilisateur');
    foreach ($emails as $value) {
        if ($value["email"] == $email && $value["idUtil"] != $_SESSION['user']) {
            return true;
        }
    }
    return false;
}
?>
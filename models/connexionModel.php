<?php
function connectionSite($email, $passwordHash)
{
    $idUser = idForEmail($email);
    $passwordHashBDD = select("SELECT mdp FROM utilisateur WHERE idUtil = '$idUser';")[0]["mdp"];
    if (password_verify($passwordHash, $passwordHashBDD)) {
        $_SESSION["user"] = $idUser;
    } else {
        echo 'erreur';
    }
}

function idForEmail($email)
{
    return select("SELECT idUtil FROM utilisateur WHERE email = '$email';")[0]["idUtil"];
}
?>
<?php
function connectionSite($email, $password)
{
    if ($email && $password) {
        $idUser = idForEmail($email);
        $passwordHashBDD = select("SELECT mdp FROM utilisateur WHERE idUtil = '$idUser';")[0]["mdp"];
        if (password_verify($password, $passwordHashBDD)) {
            $_SESSION["user"] = $idUser;
        }
    }
}

function idForEmail($email)
{
    return select("SELECT idUtil FROM utilisateur WHERE email = '$email';")[0]["idUtil"];
}
?>
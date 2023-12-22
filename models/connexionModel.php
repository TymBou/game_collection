<?php
function connectionSite($idUser, $passwordHash)
{
    $passwordHashBDD = select("SELECT mdp FROM utilisateur WHERE idUtil = '$idUser';")[0]["mdp"];
    if (password_verify($passwordHash, $passwordHashBDD)) {
        $_SESSION["user"] = $idUser;
      } else {
        echo 'erreur';
      }
}
?>
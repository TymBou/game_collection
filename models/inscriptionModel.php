<?php
function insertUser ($email, $mdp, $nomUtil, $prenom)
{
    $idUtil = getMaxIdUser()+1;
    executeQuery("INSERT INTO utilisateur VALUES ('$idUtil','$email','$mdp','$nomUtil','$prenom')");
}

function getMaxIdUser()
{
    $users = select('SELECT idUtil FROM utilisateur');
    $maxNombre = -1;
    foreach ($users as $value) {
        $nombre = $value["idUtil"];
        if ($nombre > $maxNombre) {
            $maxNombre = $nombre;
        }
    }
    return $maxNombre;
}
?>
<?php
function getAllGames($user) {
    return select('SELECT jeu.idJeu, nomJeu, URLCover, plateforme, heureDeJeu FROM jeu LEFT JOIN bibliotheque ON bibliotheque.idJeu = jeu.idJeu WHERE  idUtil = ' . $user );
}

function getNomUtil($user) {
    return select('SELECT nomUtil FROM utilisateur WHERE idUtil = ' . $user)[0]['nomUtil'];
}
?>
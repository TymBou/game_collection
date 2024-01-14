<?php
function getAllGames($user) {
    return select('SELECT DISTINCT jeu.idJeu, nomJeu, URLCover, plateforme FROM jeu LEFT JOIN bibliotheque ON bibliotheque.idJeu = jeu.idJeu WHERE jeu.idJeu NOT IN (SELECT jeu.idJeu FROM jeu LEFT JOIN bibliotheque ON bibliotheque.idJeu = jeu.idJeu WHERE idUtil = ' . $user . ')' );
}

function getSearchedGames($user, $nomGame) {
    return select('SELECT DISTINCT jeu.idJeu, nomJeu, URLCover, plateforme FROM jeu LEFT JOIN bibliotheque ON bibliotheque.idJeu = jeu.idJeu WHERE jeu.idJeu NOT IN (SELECT jeu.idJeu FROM jeu LEFT JOIN bibliotheque ON bibliotheque.idJeu = jeu.idJeu WHERE idUtil = "' . $user . '") AND nomJeu LIKE "%'. strtolower($nomGame) . '%"');
}
?>
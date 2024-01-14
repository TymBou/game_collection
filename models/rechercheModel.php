<?php
function getAllGames($user) {
    return select('SELECT DISTINCT jeu.idJeu, nomJeu, URLCover, plateforme FROM jeu LEFT JOIN bibliotheque ON bibliotheque.idJeu = jeu.idJeu WHERE jeu.idJeu NOT IN (SELECT jeu.idJeu FROM jeu LEFT JOIN bibliotheque ON bibliotheque.idJeu = jeu.idJeu WHERE idUtil = ' . $user . ')' );
}

function getSearchedGames($user, $nomGame) {
    return select('SELECT DISTINCT jeu.idJeu, nomJeu, URLCover, plateforme FROM jeu LEFT JOIN bibliotheque ON bibliotheque.idJeu = jeu.idJeu WHERE jeu.idJeu NOT IN (SELECT jeu.idJeu FROM jeu LEFT JOIN bibliotheque ON bibliotheque.idJeu = jeu.idJeu WHERE idUtil = "' . $user . '") AND nomJeu LIKE "%'. strtolower($nomGame) . '%"');
}

function ajoutJeuBibli($game) {
    $newId = select('SELECT MAX(idBibli) FROM bibliotheque')[0]['MAX(idBibli)'] +1;
    select('INSERT INTO bibliotheque VALUES (' . $newId . ', 0, ' . $_SESSION['user'] . ', ' . $game . ')');
}
?>
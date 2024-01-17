<?php
function getInfoGame($game) {
    return select('SELECT jeu.idJeu, nomJeu, URLCover, plateforme, heureDeJeu, URLSite FROM jeu INNER JOIN bibliotheque ON bibliotheque.IdJeu = jeu.IdJeu WHERE jeu.idJeu =' . $game . ' AND idUtil = ' . $_SESSION['user'])[0];
}

function updateTime($game, $time) {
    $heureActuelle = select('SELECT heureDeJeu FROM jeu INNER JOIN bibliotheque ON bibliotheque.IdJeu = jeu.IdJeu WHERE idUtil = ' . $_SESSION['user'] . ' AND jeu.idJeu =' . $game)[0]['heureDeJeu'];

    $nouvelleHeure = $heureActuelle + intval($time);
    if ($nouvelleHeure < 0) {
        $nouvelleHeure = 0;
    } 
    select('UPDATE bibliotheque SET heureDeJeu = ' . $nouvelleHeure . ' WHERE idJeu = ' . $game . ' AND idUtil = ' . $_SESSION['user']);
}

function supprJeuBibli($game) {
    select('DELETE FROM bibliotheque WHERE idUtil = ' . $_SESSION['user'] . ' AND idJeu = ' . $_GET['jeu']);
}
?>
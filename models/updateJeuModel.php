<?php
function getInfoGame($game) {
    return select('SELECT jeu.idJeu, nomJeu, URLCover, plateforme, heureDeJeu FROM jeu INNER JOIN bibliotheque ON bibliotheque.IdJeu = jeu.IdJeu WHERE jeu.idJeu =' . $game)[0];
}

function updateTime($game, $time) {
    $heureActuelle = select('SELECT heureDeJeu FROM jeu INNER JOIN bibliotheque ON bibliotheque.IdJeu = jeu.IdJeu WHERE jeu.idJeu =' . $game)[0]['heureDeJeu'];

    $nouvelleHeure = $heureActuelle + intval($time);
    if ($nouvelleHeure < 0) {
        $nouvelleHeure = 0;
    } 
    select('UPDATE bibliotheque SET heureDeJeu = ' . $nouvelleHeure . ' WHERE idJeu = ' . $game);
}
?>
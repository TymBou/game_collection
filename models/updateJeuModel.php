<?php
function getInfoGame($nomGame) {
    return select('SELECT jeu.idJeu, nomJeu, URLCover, plateforme, heureDeJeu FROM jeu INNER JOIN bibliotheque ON bibliotheque.IdJeu = jeu.IdJeu WHERE jeu.idJeu =' . $nomGame)[0];
}

?>
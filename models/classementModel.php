<?php
function getUtilsTotalH() {
    return $utils = select('SELECT utilisateur.idUtil, nomUtil, SUM(heureDeJeu) FROM utilisateur INNER JOIN bibliotheque ON bibliotheque.idUtil = utilisateur.idUtil GROUP BY nomUtil ORDER BY SUM(heureDeJeu) DESC');
}

function getJeuFav($user) {
    return select('SELECT nomJeu, heureDeJeu FROM bibliotheque INNER JOIN jeu ON jeu.idJeu = bibliotheque.idJeu WHERE idUtil = ' . $user . ' AND heureDeJeu = (SELECT MAX(heureDeJeu) FROM bibliotheque WHERE idUtil = ' . $user . ') GROUP BY idUtil  ');
}
?>
<?php
function getUtils() {
    return select('SELECT nomUtil, SUM(heureDeJeu), jeu.nomJeu FROM utilisateur INNER JOIN bibliotheque ON bibliotheque.idUtil = utilisateur.idUtil INNER JOIN jeu ON jeu.idJeu = bibliotheque.idJeu INNER JOIN
    (SELECT idUtil, nomJeu, MAX(heureDeJeu) AS maxH FROM bibliotheque NATURAL JOIN jeu GROUP BY idUtil )
    AS tabMax ON tabMax.idUtil = utilisateur.idUtil WHERE maxH = heureDeJeu GROUP BY nomUtil, nomJeu, maxH, heureDeJeu ORDER BY SUM(heureDeJeu) DESC');
}
?>
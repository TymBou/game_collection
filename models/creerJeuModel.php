<?php
function creerJeu($id, $nom, $date, $editeur, $plateforme, $descr, $cover, $site) {
    select('INSERT INTO jeu VALUE ( ' . $id .', "'
                                        . $nom .'", '
                                        . $date .', "'
                                        . $editeur .'", "'
                                        . $plateforme .'", "'
                                        . $descr .'", "'
                                        . $cover .'", "'
                                        . $site .'")');
}

function verifJeu($nom) {
    return select('SELECT idJeu FROM jeu WHERE nomJeu = "' . $nom . '"');
}

function getNewId() {
    return select('SELECT MAX(idJeu), idJeu FROM jeu')[0];
}

function addJeu($id, $user) {
    $newId = select('SELECT MAX(idBibli) FROM bibliotheque')[0]['MAX(idBibli)'];
    select('INSERT INTO bibliotheque VALUE (' . $newId +1 . ', 0.0, ' . $user . ', ' . $id . ')');
}

function verifbibli($jeu, $user) {
    return select('SELECT jeu.idJeu FROM jeu INNER JOIN bibliotheque ON bibliotheque.idJeu = jeu.idJeu WHERE jeu.idJeu = "' . $jeu . '" AND idUtil = "' . $user . '"');
}
?>
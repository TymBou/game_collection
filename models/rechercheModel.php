<?php
function getAllGames() {
    return select('SELECT nomJeu, URLCover, plateforme FROM jeu');
}

function getSearchedGames($nomGame) {
    return select("SELECT nomJeu, URLCover, plateforme FROM jeu WHERE nomJeu LIKE '%". $nomGame. "%'");

}
?>
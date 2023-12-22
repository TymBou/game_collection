<?php
function connectionBDD()
{
    return new PDO("mysql:host=" . $_ENV['host'] . ";dbname=" . $_ENV['dbname'], $_ENV['user'], $_ENV['mdp'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

function select($query)
{
  $res  = connectionBdd()->query($query);
  $table = $res->fetchALL(PDO::FETCH_ASSOC);
  return $table;
}

function getAllGames() {
    return select('SELECT nomJeu, URLCover, plateforme FROM jeu');
}

function getSearchedGames($nomGame) {
    return select("SELECT nomJeu, URLCover, plateforme FROM jeu WHERE nomJeu LIKE '%". $nomGame. "%'");

}
?>
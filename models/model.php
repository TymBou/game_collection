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
?>
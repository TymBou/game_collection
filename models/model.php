<?php
function connectionBDD()
{
    $host = "localhost";
    $dbname = 'gamecollection';
    $user = 'root';
    $mdp = null;

    return new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

function select($query)
{
  $res  = connectionBdd()->query($query);
  $table = $res->fetchALL(PDO::FETCH_ASSOC);
  return $table;
}
?>
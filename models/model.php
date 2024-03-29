<?php
function connectionBDD()
{
    return new PDO("mysql:host=" . $_ENV['HOST'] . ";dbname=" . $_ENV['DBNAME'], $_ENV['USER'], $_ENV['PASSWORD'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

function select($query)
{
  $res  = connectionBdd()->query($query);
  $table = $res->fetchALL(PDO::FETCH_ASSOC);
  return $table;
}

function executeQuery($query)
{
    $res = connectionBDD()->prepare($query);
    $res->execute();
}
?>
<?php
<<<<<<< HEAD
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

function getMaxIdUser()
{
    $users = select('SELECT idUtil FROM utilisateur');
    $maxNombre = -1;
    foreach ($users as $value) {
        $nombre = $value["idUtil"];
        if ($nombre > $maxNombre) {
            $maxNombre = $nombre;
        }
    }
    return $maxNombre;
}
=======
>>>>>>> feature/footerheader
?>
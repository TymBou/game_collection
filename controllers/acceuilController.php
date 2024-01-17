<?php
    require("models/acceuilModel.php");

    $games = getAllGames($_SESSION['user']);
    $nomUtil = getNomUtil($_SESSION['user']);

    require("Views/acceuilView.php");

?>
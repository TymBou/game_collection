<?php

    require("models/updateJeuModel.php");

    $game = getInfoGame($_GET['jeu']);

    if (isset($_POST['nbrHeure'])) {
        updateTime($_GET['jeu'], $_POST['nbrHeure']);
    }

    $game = getInfoGame($_GET['jeu']);

    require("views/updateJeuView.php");
?>
<?php

    require("models/updateJeuModel.php");

    $game = getInfoGame($_GET['jeu']);

    if (isset($_GET['action']) AND $_GET['action'] == 'supprimer'){
        supprJeuBibli($_GET['jeu']);
        header('Location:/game_collection');
    }elseif (isset($_POST['nbrHeure'])) {
        updateTime($_GET['jeu'], $_POST['nbrHeure']);
    }

    $game = getInfoGame($_GET['jeu']);

    require("views/updateJeuView.php");
?>
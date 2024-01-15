<?php

    require("models/rechercheModel.php");
    if(isset($_GET['action']) AND $_GET['action'] = 'ajout') {
        ajoutJeuBibli($_GET['jeu']);
        header('Location:/game_collection');
    } elseif (isset($_POST['jeuRecherche'])) {
        $games = getSearchedGames($_SESSION['user'], htmlspecialchars($_POST['jeuRecherche']));
    } else {
        $games = getAllGames($_SESSION['user']);
    }
    
    require("views/rechercheView.php");
?>
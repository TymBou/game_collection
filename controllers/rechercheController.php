<?php

    require("models/rechercheModel.php");
    
    if (isset($_POST['jeuRecherche'])) {
        $games = getSearchedGames($_SESSION['user'], htmlspecialchars($_POST['jeuRecherche']));
    }
    else {
        $games = getAllGames($_SESSION['user']);
    }
    
    require("views/rechercheView.php");
?>
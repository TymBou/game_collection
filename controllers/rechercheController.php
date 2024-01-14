<?php

    require("models/rechercheModel.php");
    
    if (isset($_POST['jeuRecherche'])) {
        $games = getSearchedGames($_SESSION['user'], htmlspecialchars($_POST['jeuRecherche']));
    }
    else {
        $games = getAllGames($_SESSION['user']);
    }

    if (sizeof($games) == 0) {
         require("views/rechercheVideView.php"); 
    } else { require("views/rechercheView.php"); }
?>
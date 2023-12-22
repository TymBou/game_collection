<?php

    require("models/rechercheModel.php");

    if (isset($_POST['jeuRecherche'])) {
        $games = getSearchedGames($_POST['jeuRecherche']);
    }
    else {
        $games = getAllGames();
    }
    require("views/rechercheView.php");
?>
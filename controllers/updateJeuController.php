<?php

    require("models/updateJeuModel.php");

    $game = getInfoGame($_GET['jeu']);

    require("views/updateJeuView.php");
?>
<?php
    require("models/classementModel.php");

    $utils = getUtilsTotalH();

    for ($i = 0; $i < sizeof($utils); $i++) {
        array_push($utils[$i], getJeuFav($utils[$i]['idUtil'])[0]['nomJeu']);
    }

    require("views/classementView.php");
?>
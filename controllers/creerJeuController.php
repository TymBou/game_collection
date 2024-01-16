<?php
    require("models/creerJeuModel.php");
    
    if (isset($_POST["editeurJeu"]) && isset($_POST["date"]) && isset($_POST["urlCover"]) && isset($_POST["urlSite"]) && isset($_POST["nomJeu"]) && (isset($_POST["play"]) || isset($_POST["xBox"]) || isset($_POST["nintendo"]) || isset($_POST["pc"]))) {
        
        $jeu = verifJeu($_POST["nomJeu"]);
        if ($jeu != null) {
            var_dump($jeu);
            $jeu = $jeu[0];
        
            if (sizeof($jeu) > 0) {
                $bibli = verifbibli($jeu['idJeu'], $_SESSION['user']);
                if (sizeof($bibli) == 0) {
                    addJeu($jeu['idJeu'], $_SESSION['user']);
                }
                require("views/jeuExisteView.php");
            }
        } else {
            $cpt = 0;
            if (isset($_POST["play"])) {
                $cpt = $cpt + 1;
            }
            if (isset($_POST["xBox"])) {
                $cpt = $cpt + 1;
            }
            if (isset($_POST["nintendo"])) {
                $cpt = $cpt + 1;
            }
            if (isset($_POST["pc"])) {
                $cpt = $cpt + 1;
            }

            $platform = "";
            if (isset($_POST["play"]) && isset($_POST["xBox"]) && isset($_POST["nintendo"]) && isset($_POST["pc"])) {
                $platform = "All";
            } else {
                if (isset($_POST["play"])) {
                    $platform = $_POST["play"];
                    $cpt = $cpt -1;
                    if ($cpt > 0) {
                        $platform = $platform . "/";
                    }
                }
                if (isset($_POST["xBox"])) {
                    $platform = $platform . $_POST["xBox"];
                    $cpt = $cpt -1;
                    if ($cpt > 0) {
                        $platform = $platform . "/";
                    }
                }
                if (isset($_POST["nintendo"])) {
                    $platform = $platform . $_POST["nintendo"];
                    $cpt = $cpt -1;
                    if ($cpt > 0) {
                        $platform = $platform . "/";
                    }
                }
                if (isset($_POST["pc"])) {
                    $platform = $platform . $_POST["pc"];
                }
            }
            $id = getNewId()['MAX(idJeu)'] +1;

            $date = $_POST['date'];

            creerJeu($id, htmlspecialchars($_POST['nomJeu']), $date, htmlspecialchars($_POST['editeurJeu']), $platform, htmlspecialchars($_POST['descJeu']), htmlspecialchars($_POST['urlCover']), htmlspecialchars($_POST['urlSite']));
            header('location:/game_collection/');
        }
    }else {
        require("views/creerJeuView.php");
    }
?>
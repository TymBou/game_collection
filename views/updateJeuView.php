<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet" />
    <title>Game Collection - Jeu</title>
</head>

<body>
    <main>
        <div style="margin-left: 5%">
            <div class="flexcontainer">
                <div class="flexchild">
                    <h2><?php echo $game['nomJeu'] ?></h2>
                    <p><?php echo $game['plateforme'] ?></p>
                    <p>Temps passé : <?php echo $game['heureDeJeu'] ?> H </p>
                    <h2>Ajouter du temps passé sur le jeu</h2>
                    <form method='POST'>
                        <p>Temps passé sur le jeu</p>
                        <input type="number" name="nbrHeure" step=".01">
                        <br \>
                        <input class="btn btnNoMargin" type="submit" value="Ajouter">
                    </form>
                    <a class="btn" href="?dir=update&jeu=<?php echo $game['idJeu'] ?>&action=supprimer">Supprimer le jeu de ma bibliothèque</a>
                </div>
                <div class="flexchild">
                    <a href="<?php echo $game['URLSite'] ?>"><img src="<?php echo $game['URLCover'] ?>"></a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
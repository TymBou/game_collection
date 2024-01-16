<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet" />
    <title>Game Collection - Jeu</title>
</head>
<body>
    <div>
        <div>
            <img src="<?php echo $game['URLCover']?>">
        </div>
        <div>
            <div>
                <h2><?php echo $game['nomJeu']?></h2>
                <p><?php echo $game['plateforme']?></p>
                <p>Temps passé : <?php echo $game['heureDeJeu']?></p>
            </div>
            <div>
                <h2>Ajouter du temps passé sur le jeu</h2>
                <form method='POST'>
                    <input type="number" name="nbrHeure">
                    <input type="submit">
                </form>
                <a href="?dir=update&jeu=<?php echo $game['idJeu'] ?>&action=supprimer">Supprimer le jeu de ma bibliothèque</a>
            </div>
        </div>
    </div>
</body> 
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet" />
    <title>Ma Bibliothéque</title>
</head>
<body>
    <div>
        <h1>Ajouter un jeu à ma bibliothèque</h1>
        <form method="post">
            <input type="text" name="jeuRecherche" placeholder="Rechercher un jeu">
            <input type="submit">
        </form>
    </div>

    <div>
        <?php foreach ($games as $game) { ?>
        <div>
            <img src="<?php echo $game['URLCover']?>">
            <h2><?php echo $game['nomJeu']?></h2>
            <p><?php echo $game['plateforme']?></p>
            <a href="?dir=recherche&action=ajout&jeu=<?php echo $game['idJeu'] ?>">Ajouter à ma bibliothèque</a>
        </div>
        <?php } ?>
    </div>
</body>
</html>
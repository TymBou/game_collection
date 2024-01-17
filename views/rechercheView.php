<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet" />
    <title>Game Collection - Recherche</title>
</head>

<header>
    <a href="/game_collection/">
        <img class="logo" src="./ressources/Images/logo.png" alt="Game Collection" hover="Logo Game Collection">
    </a>

    <nav class="liens">
        <ul>
            <li>
                <a href="/game_collection/">MA BIBLIOTHÈQUE</a>
            </li>
            <li>
                <a href="/game_collection/?dir=creerJeu">AJOUTER UN JEU</a>
            </li>
            <li>
                <a href="/game_collection/?dir=classement">CLASSEMENT</a>
            </li>
            <li>
                <a href="/game_collection/?dir=profil">PROFIL</a>
            </li>
        </ul>
        </div>
</header>
<main>

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
                    <img src="<?php echo $game['URLCover'] ?>">
                    <h2><?php echo $game['nomJeu'] ?></h2>
                    <p><?php echo $game['plateforme'] ?></p>
                    <a href="?dir=recherche&action=ajout&jeu=<?php echo $game['idJeu'] ?>">Ajouter à ma bibliothèque</a>
                </div>
            <?php } ?>
        </div>
    </body>
</main>

<footer>
    Game Collection - 2023 - Tout droits réservés
</footer>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet" />
    <title>Game Collection - Jeu</title>
</head>

<body>
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
        <div>
            <div>
                <a href="<?php echo $game['URLSite'] ?>"><img src="<?php echo $game['URLCover'] ?>"></a>
            </div>
            <div>
                <div>
                    <h2><?php echo $game['nomJeu'] ?></h2>
                    <p><?php echo $game['plateforme'] ?></p>
                    <p>Temps passé : <?php echo $game['heureDeJeu'] ?> H </p>
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
</main>

<footer>
    Game Collection - 2023 - Tout droits réservés
</footer>

</html>
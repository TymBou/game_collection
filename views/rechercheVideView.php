<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection - Recherche</title>
</head>

<body>
    <header>
        <a href="/game_collection/?dir=bibliotheque">
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
            <h1>Ajouter un jeu à ma bibliothèque</h1>
            <form method="post">
                <input type="text" name="jeuRecherche" placeholder="Rechercher un jeu">
                <input type="submit">
            </form>
        </div>

        <div>
            <h2>Aucun jeu disponible :</h2>
            <a href='/game_collection/?dir=creerJeu'>gnangnan un jeu</a>
        </div>
    </main>

    <footer>
        Game Collection - 2023 - Tout droits réservés
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title>Game Collection - Recherche</title>
</head>

<body>
    <main>
        <div style="margin-left:5%">
            <h1>Ajouter un jeu à ma bibliothèque</h1>
            <form method="post">
                <input type="text" name="jeuRecherche" placeholder="Rechercher un jeu">
                <br \>
                <input class="btn btnNoMargin" type="submit">
            </form>
        </div>

        <div style="margin-left:5%">
            <h2>Aucun jeu disponible :</h2>
            <a class="btn btnNoMargin" href='/game_collection/?dir=creerJeu'>Ajouter un jeu</a>
        </div>
    </main>
</body>

</html>
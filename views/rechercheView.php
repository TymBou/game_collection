<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet" />
    <title>Game Collection - Recherche</title>
</head>


<body>

    <main>
        <div>
            <h1>Ajouter un jeu à ma bibliothèque</h1>
            <form method="post">
                <input type="text" name="jeuRecherche" placeholder="Rechercher un jeu">
                <input type="submit">
            </form>
        </div>

        <div class="cards">
            <?php foreach ($games as $game) { ?>
                <div class="card" style="background: url(<?php echo $game['URLCover'] ?>) 50%, linear-gradient(to top, rgba(0, 0, 0, 0.9) 40%, rgba(255, 255, 255, 0.9) 60%); background-blend-mode:multiply;">
                    <div class="infoCard">
                        <div class="textCard">
                            <h2><?php echo $game['nomJeu'] ?></h2>
                            <p><?php echo $game['plateforme'] ?></p>
                            <a href="?dir=recherche&action=ajout&jeu=<?php echo $game['idJeu'] ?>">Ajouter à ma bibliothèque</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>
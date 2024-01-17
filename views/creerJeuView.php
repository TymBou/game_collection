<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title>Game Collection - Creation Jeu</title>
</head>

<body>
    <main>
        <div class="creerJeuDiv">
            <h2>Ajouter un jeu a sa bibliothèque</h2>
            <p>Le jeu que vous souhaitez ajouter n'existe pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouter à votre biliothèque !</p>
            <form method='POST'>
                <p>Nom du jeu</p>
                <input type="text" name="nomJeu" placeholder="Nom du jeu">
                <p>Editeur du jeu</p>
                <input type="text" name="editeurJeu" placeholder="Nom du jeu">
                <p>Sortie du jeu</p>
                <input type="date" name="date">
                <h4>Plateformes</h4>
                <p>Playstation</p>
                <input type="checkbox" name="play" value="Playstation">
                <p>XBox</p>
                <input type="checkbox" name="xBox" value="XBox">
                <p>Nintendo</p>
                <input type="checkbox" name="nintendo" value="Nintendo">
                <p>Pc</p>
                <input type="checkbox" name="pc" value="Pc">
                <p>Description du jeu</p>
                <input type="textarea" name="descJeu" placeholder="Nom du jeu">
                <p>URL de la cover</p>
                <input type="text" name="urlCover" placeholder="Nom du jeu">
                <p>URL du site</p>
                <input type="text" name="urlSite" placeholder="Nom du jeu">
                <br \>
                <input class="btn" type="submit" value="Ajouter un jeu" placeholder="Nom du jeu">
            </form>
        </div>
    </main>
</body>

</html>
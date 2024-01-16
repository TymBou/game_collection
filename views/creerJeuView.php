<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <div>
        <h2>Ajouter un jeu a sa bibliothèque</h2>
        <p>Le jeu que vous souhaitez ajouter n'existe pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouter aa votre biliothèque !</p>
        <form method='POST'>
            <p>Nom du jeu</p>
            <input type="text" name="nomJeu">
            <p>Editeur du jeu</p>
            <input type="text" name="editeurJeu">
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
            <input type="textarea" name="descJeu">
            <p>URL de la cover</p>
            <input type="text" name="urlCover">
            <p>URL du site</p>
            <input type="text" name="urlSite">
            <input type="submit" placeholder="Ajouter un jeu">
        </form>
    </div>

</body>
</html>
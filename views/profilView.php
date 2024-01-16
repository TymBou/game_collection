<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title>Game Collection - Profil</title>
</head>

<body>
    <header>
        <a href="/game_collection/?dir=bibliotheque">
            <img class="logo" src="./ressources/Images/logo.png" alt="Game Collection" hover="Logo Game Collection">
        </a>

        <nav class="liens">
            <ul>
                <li>
                    <a href="/game_collection/?dir=bibliotheque">MA BIBLIOTHÈQUE</a>
                </li>
                <li>
                    <a href="/game_collection/?dir=">AJOUTER UN JEU</a>
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
        <div class="profil">
            <h1>Mon Profil</h1>

            <h3>Nom :</h3>
            <?php
            echo '<p style="margin-left:2%;">' . $lName . '</p>';
            ?>

            <h3>Prénom :</h3>
            <?php
            echo '<p style="margin-left:2%;">' . $fName . '</p>';
            ?>

            <h3>Email :</h3>
            <?php
            echo '<p style="margin-left:2%;">' . $email . '</p>';
            ?>

            <br \>
            <a class="btn" href="?dir=profilFormulaire">MODIFIER MON PROFIL</a>
            <br \><br \>
            <a class="btn" href="?dir=profil&action=supprimer" onclick="return confirm('Voulez vous vraiment supprimer votre compte?')">SUPPRIMER MON COMPTE</a>
            <br \><br \>
            <a class="btn" href="?dir=profil&action=deconnecter">SE DÉCONNECTER</a>
        </div>
    </main>
    <footer>
        Game Collection - 2023 - Tout droits réservés
    </footer>

</body>

</html>
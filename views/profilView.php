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
            <a class="btn" href="?dir=profil">MODIFIER MON PROFIL</a>
            <br \><br \><br \>
            <a class="btn" href="?dir=profil&action=supprimer" onclick="return confirm('Voulez vous vraiment supprimer votre compte?')">SUPPRIMER MON COMPTE</a>
            <br \><br \><br \>
            <a class="btn" href="?dir=profil&action=deconnecter">SE DÉCONNECTER</a>
        </div>
    </main>
</body>

</html>
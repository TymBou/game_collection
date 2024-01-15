<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/style.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Connexion</title>
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
      <form method="post">
        <p>Nom :</p>
        <input type="text" name="lastName" value="<?php echo $lName ?>">
        <p>Prénom :</p>
        <input type="text" name="firstName" value="<?php echo $fName ?>">
        <p>Email :</p>
        <input type="email" name="email" value="<?php echo $email ?>">
        <p>Mot de passe :</p>
        <input type="password" name="pwd">
        <p>Confirmation de mot de passe :</p>
        <input type="password" name="pwdConf">

        <?php
        if ($message) {
          echo $message;
        }
        ?>
        <br \>
        <input class="btn" type="submit" name="submit" value="MODIFIER">
        <a class="btn" href="?dir=profilFormulaire&action=supprimer" onclick="return confirm('Voulez vous vraiment supprimer votre compte?')">SUPPRIMER MON COMPTE</a>
        <a class="btn" href="?dir=profilFormulaire&action=deconnecter">SE DÉCONNECTER</a>
      </form>
    </div>
  </main>
  <footer>
    Game Collection - 2023 - Tout droits réservés
  </footer>
</body>


</html>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link href="./css/style.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <title>Game Collection - Inscription</title>
</head>

<body>

  <div class="connexionDiv container">
    <div class="centered-element">
      <h1>Inscription</h1>
      <form method="post">
        <p>Prénom :</p>
        <input type="text" name="lastName" value="<?php echo $lName ?>">
        <p>Nom :</p>
        <input type="text" name="firstName" value="<?php echo $fName ?>">
        <p>Email :</p>
        <input type="email" name="email" value="<?php echo $email ?>">
        <p>Mot de passe :</p>
        <input type="password" name="pwd" value="<?php echo $pwd ?>">
        <p>Confirmation du mot de passe :</p>
        <input type="password" name="pwdConf" value="<?php echo $pwdConf ?>">

        <?php
        if ($message) {
          echo $message;
        }
        ?>
        <br \>
        <input class="btn" type="submit" name="submit" value="S'INSCRIRE">
        <a href="/game_collection">Se connecter</a>
      </form>
    </div>
  </div>
</body>
<footer>
  Game Collection - 2023 - Tout droits réservés
</footer>

</html>
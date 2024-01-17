<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/style.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <title>Game Collection - Connexion</title>
</head>

<body>
  <main>
    <div class="container connexionDiv">
      <div class="item">
        <h1>Se connecter à Game Collection</h1>
        <form method="post">
          <p>Email :</p>
          <input type="email" name="email" value="<?php echo $email ?>">
          <p>Mot de passe :</p>
          <input type="password" name="pwd">
          <br \>
          <?php
          if ($message) {
            echo $message;
          }
          ?>
          <br \>
          <input class="btn connexionBtn" type="submit" name="submit" value="SE CONNECTER">
          <br \>
          <a style="margin-bottom: 100%;" href="/game_collection/?dir=inscription">S'inscrire</a>
        </form>
      </div>
    </div>

  </main>
</body>

</html>
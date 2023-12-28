<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
<form method="post">
  <input type="email" name="email" value="<?php echo $email ?>">
  <input type="password" name="pwd">

  <?php
  if ($message) {
    echo $message;
  }
  ?>

  <input type="submit" name="submit" value="SE CONNECTER">
  <a href="/game_collection/?dir=inscription">S'inscrire</a>
</form>

</body>
</html>
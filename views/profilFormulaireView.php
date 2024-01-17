<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/style.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Game Collection - Profil</title>
</head>

<body>
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
        <br \>
        <a class="btn" href="?dir=profil&action=supprimer" onclick="return confirm('Voulez vous vraiment supprimer votre compte?')">SUPPRIMER MON COMPTE</a>
        <br \><br \><br \>
        <a class="btn" href="?dir=profil&action=deconnecter">SE DÉCONNECTER</a>
      </form>
    </div>
  </main>
</body>


</html>
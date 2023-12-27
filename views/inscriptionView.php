<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
<form method="post">
  <input type="text" name="lastName" value="<?php echo $lName ?>">
  <input type="text" name="firstName" value="<?php echo $fName ?>">
  <input type="email" name="email" value="<?php echo $email ?>">
  <input type="password" name="pwd" value="<?php echo $pwd ?>">
  <input type="password" name="pwdConf" value="<?php echo $pwdConf ?>">

  <?php
  if ($message) {
    echo $message;
  }
  ?>
  
  <input type="submit" name="submit" value="S'INSCRIRE">
  <a href="">Se connecter</a>
</form>

</body>
</html>
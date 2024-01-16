<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link href="./css/style.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <title>Connexion</title>
</head>

<body>

  <div>
    <h2>Classement des temps passées</h2>
  </div>
  <div>
    <table>
        <tr>
            <th>Joueur</th>
            <th>Temps Passés</th>
            <th>Jeu favori</th>
        </tr>
        <?php foreach ($utils as $util) { ?>
        <tr>
            <th><?php echo $util['nomUtil']?></th>
            <th><?php echo $util['SUM(heureDeJeu)']?></th>
            <th><?php echo $util['nomJeu']?></th>
        </tr>
            <?php } ?>
    </table>
  </div>
  
</body>
<footer>
  Game Collection - 2023 - Tout droits réservés
</footer>

</html>
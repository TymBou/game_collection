<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link href="./css/style.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <title>Game Collection - Classement</title>
</head>

<body>
  <main>
    <div style="margin-left:10%">
      <h1>Classement des temps passées</h1>
    </div>
    <div class="container">
      <table>
        <tr class="first">
          <th>Joueur</th>
          <th>Temps Passés</th>
          <th>Jeu favori</th>
        </tr>
        <?php foreach ($utils as $util) { ?>
          <tr>
            <th><?php echo $util['nomUtil'] ?></th>
            <th><?php echo $util['SUM(heureDeJeu)'] ?> H</th>
            <th><?php echo $util[0] ?></th>
          </tr>
        <?php } ?>
      </table>
    </div>
  </main>
</body>

</html>
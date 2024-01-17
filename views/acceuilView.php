<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/style.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <title>Game Collection</title>
</head>

<body>
  <main>
    <div>
      <h1>Salut <?php echo $nomUtil; ?> ! Prêt à ajouter des jeux à ta collection ?</h1>
    </div>
    <div>
      <?php foreach ($games as $game) { ?>
        <div>
          <a href="/game_collection/?dir=update&jeu=<?php echo  $game['idJeu'] ?>">
            <img src="<?php echo $game['URLCover'] ?>">
            <h2><?php echo $game['nomJeu'] ?></h2>
            <p><?php echo $game['plateforme'] ?></p>
            <p><?php echo $game['heureDeJeu'] ?>H</p>
          </a>
        </div>
      <?php } ?>
    </div>
  </main>
</body>

</html>
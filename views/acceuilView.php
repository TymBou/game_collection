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
    <div class="cards">
      <?php foreach ($games as $game) { ?>
        <div class="card" style="background: url(<?php echo $game['URLCover'] ?>) 50%, linear-gradient(to top, rgba(0, 0, 0, 0.9) 40%, rgba(255, 255, 255, 0.9) 60%); background-blend-mode:multiply;">
          <div class="infoCard">
            <div class="textCard">
              <a href="/game_collection/?dir=update&jeu=<?php echo  $game['idJeu'] ?>">
                <h2><?php echo $game['nomJeu'] ?></h2>
                <p class="heureDeJeu"><?php echo $game['heureDeJeu'] ?>H</p>
                <p><?php echo $game['plateforme'] ?></p>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </main>
</body>

</html>
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
  <header>
    <a href="/game_collection/">
      <img class="logo" src="./ressources/Images/logo.png" alt="Game Collection" hover="Logo Game Collection">
    </a>

    <nav class="liens">
      <ul>
        <li>
          <a href="/game_collection/">MA BIBLIOTHÈQUE</a>
        </li>
        <li>
          <a href="/game_collection/?dir=creerJeu">AJOUTER UN JEU</a>
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
            <th><?php echo $util['nomUtil'] ?></th>
            <th><?php echo $util['SUM(heureDeJeu)'] ?></th>
            <th><?php echo $util[0] ?></th>
          </tr>
        <?php } ?>
      </table>
    </div>
  </main>
  <footer>
    Game Collection - 2023 - Tout droits réservés
  </footer>
</body>

</html>
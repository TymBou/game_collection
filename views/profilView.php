<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
    <?php 
        echo $lName . '<br>';
        echo $fName . '<br>';
        echo $email . '<br>';
    ?>
    <a href="?dir=profilFormulaire">MODIFIER MON PROFIL</a>
    <a href="?dir=profil&action=supprimer">SUPPRIMER MON COMPTE</a>
    <a href="?dir=profil&action=deconnecter">SE DÉCONNECTER</a>


</body>
</html>
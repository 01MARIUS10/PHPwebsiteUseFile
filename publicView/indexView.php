<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="./publicAsset/sac-dargent.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link rel="stylesheet" href="./publicView/css/styleformulaire.css">
</head>
<body>

    <div class="fullscreen">
        <div class="link-index">
            <div class="header">
                   <h1>Allo!</h1> <?php print_r($_COOKIE);?>
            </div>
            <div class="contenu">
                <p class="bouton"><a href="./publicController/logIn.php">se connecter</a></p>
                <p class="bouton"><a href="./publicController/signIn.php">   s'inscrire   </a></p>
            </div>
        </div>
    </div>

</body>
</html>
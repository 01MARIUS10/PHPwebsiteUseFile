<?php
//--------------------------------------------------------------------------
    $title="mon Site";
    unset($_COOKIE);
    setcookie("email","",time()-10);
    setcookie("mdp","",time()-10);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="sac-dargent.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link rel="stylesheet" href="../css/styleformulaire.css">
</head>
<body>

    <div class="fullscreen">
        <?php echo "la cookie=". print_r($_COOKIE)?>
        <div class="link-index">
            <div class="header">
                   <h1>BIENVENU!</h1> 
            </div>
            <div class="contenu">
                <p class="bouton"><a href="../logIn.php">se connecter</a></p>
                <p class="bouton"><a href="../signIn.php">   s'inscrire   </a></p>
            </div>
        </div>
    </div>

</body>
<!---------------------------------------------------------------------------- -->

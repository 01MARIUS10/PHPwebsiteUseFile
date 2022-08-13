<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="./publicAsset/sac-dargent.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link rel="stylesheet" href="../publicView/css/styleformulaire.css">
</head>
<body>

<div class="fullscreen">
        <div class="formulaire">
            <div class="header">
                   <h1>LOGIN</h1> 
            </div>
            <div class="contenu">
                <form action="logIn.php" method="POST">
                    <div class="login-formulaire">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="exemple@gmail.com" required><br>
                        <label for="mdp">Password</label>
                        <input type="password" name="mdp" id="mdp" required>
                    </div>
                    <p><button type="submit">Valider</button></p>
                    <p class="warning" <?= $errormail?>>compte inexistant</p>
                    <p class="warning" <?= $errorpasswd?>>mot de passe erroné</p>
                </form>
            </div>
        </div>
</div>

</body>
</html>
<?php
    $title="mon Site";
    if(isset($_GET["action"])&& $_GET["action"]=="deconnection")
    {
        unset($_COOKIE);
        setcookie("email","",time()-10);
        setcookie("mdp","",time()-10);
    }
    require "./features/head.php";
?>

    <div class="fullscreen">
        <?= print_r($_COOKIE)?>
        <div class="link-index">
            <div class="header">
                   <h1>BIENVENU!</h1> 
            </div>
            <div class="contenu">
                <p class="bouton"><a href="./logIn.php">se connecter</a></p>
                <p class="bouton"><a href="./signIn.php">   s'inscrire   </a></p>
            </div>
        </div>
    </div>

<?php 
    require "./features/foot.php";
?>

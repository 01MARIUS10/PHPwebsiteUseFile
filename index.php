<?php
    $title="mon Site";

    /**
    *gerer l'action de deconnection  
    *suppression de cookie en cas de deconnection
    *puis de reafficher la page de depart;
    */
    if(isset($_GET["action"])&& $_GET["action"]=="deconnection")
    {
        echo"coucouuuu";
        unset($_COOKIE);
        setcookie("email","",time()-10);
        setcookie("mdp","",time()-10);
    }

    /*
    *Include la view de l'index(choix sur connection ou inscription)
    */
    require_once("./publicView/indexView.php");
?>




<?php 
    require_once "function.php" ;
    if($_POST["mdp"]!=$_POST["cmdp"])
    {
        
        header('Location: signInError.php');
    }
    else{
        // require "donne/ecrirefichier.php";
        setcookie("email",$_POST["email"],time()+3600,null,null,false,true);
        setcookie("mdp",$_POST["mdp"],time()+3600,null,null,false,true);
        addToData($_POST);
        header('Location: ./pageLayout/Home.php');
    }
?>
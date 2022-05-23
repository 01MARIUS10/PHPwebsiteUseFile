<?php 
    require_once "function.php" ;
    //require_once"donne.php";
    if(isset($_POST["email"])&& isset($_POST["mdp"]))
        $utilisateur=take_user($_POST["email"],$_POST["mdp"],"");
    if($utilisateur===null)
    {
        header('Location: logInError.php');
    }
    else{
        setcookie("email",$_POST["email"],time()+3600,null,null,false,true);
        setcookie("mdp",$_POST["mdp"],time()+3600,null,null,false,true);
        header('Location: ./pageLayout/Home.php');
    }
?>

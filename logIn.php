<?php 
    if(isset($_COOKIE["email"]) || isset($_COOKIE["mdp"]))
        header("Location: pageLayout/Home.php");
    else{
        $title="se connecter";
        require_once "features/head.php" ;
        require_once "formulaireLog.php";
    }
    
?>
    
   
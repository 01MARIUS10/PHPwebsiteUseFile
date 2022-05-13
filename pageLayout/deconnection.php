<?php
   // $_COOKIE=[];
    setcookie("email","",time()-10);
    setcookie("mdp","",time()-10);
    unset($_COOKIE);
    
    // require "../index2.php";
    // var_dump($_COOKIE);
     header('Location: ./../index.php');
?>
<!-- <a href="./../index.php">retourner a l'aceuil<a> -->
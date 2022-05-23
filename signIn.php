<?php 
    $title="s'inscrire";
    $errormdp="hidden";//masquer la message d'erreur du formulaire
    $accountExisting="hidden";
    require_once "function.php";

    /*_________traitement du formulaire_______*/
    /********************************************pour le apres avoir rempli*/
    if(isset($_POST["mdp"]) && isset($_POST["cmdp"])){
        if($_POST["mdp"]===$_POST["cmdp"]){
            setcookie("email",$_POST["email"],time()+3600,null,null,false,true);
            setcookie("mdp",$_POST["mdp"],time()+3600,null,null,false,true);
            if(addToData($_POST))
                header('Location: ./pageLayout/Home.php');
            else{
                $accountExisting="";
                $title="Account existing";
            }
        }
        else{
            $errormdp="";
            $title="erreur !";
        }
    }
    require_once "./features/head.php" ;
    require_once "./signInformulaire.php" ;
    require_once "./features/foot.php";
?>
    
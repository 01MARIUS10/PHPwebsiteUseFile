<?php 
    require_once "function.php" ;
    $utilisateur="";

    /*----___traitement de la cookie___---*/
    /***************************************si on a deja une cookie */
    if(isset($_COOKIE["email"]) || isset($_COOKIE["mdp"]))
        header("Location: pageLayout/Home.php");

    /*_________traitement du formulaire_______*/
    /********************************************pour le apres avoir rempli*/
    if(isset($_POST["email"])&& isset($_POST["mdp"]))
        $utilisateur=take_user($_POST["email"],$_POST["mdp"],"");
    if(gettype($utilisateur)=="array")
    {
        setcookie("email",$_POST["email"],time()+3600,null,null,false,true);
        setcookie("mdp",$_POST["mdp"],time()+3600,null,null,false,true);
        header('Location: ./pageLayout/Home.php');
    }

    $errormail="hidden";
    $errorpasswd="hidden";
    /*********************************************si on avait rempli mais les valeur sont inconnu */
    if($utilisateur==="errormail")
        $errormail="";
    if($utilisateur==="errorpasswd")
        $errorpasswd="";
    
    /*_______si on n'avait pas de cookie ou que les valeur inserer etait fausse*/
    $title="se connecter";
    require_once "./features/head.php" ;
    require_once "./logInformulaire.php";
    require_once "./features/foot.php";
?>
    
   
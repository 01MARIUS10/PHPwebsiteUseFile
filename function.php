<?php
/* <bool> : voir si le tableau $a_verifier est dans $reference */
function is_inarray(array $a_verifier,array $reference):bool
{
    foreach($a_verifier as $id=>$val)
    {
        if(isset($a_verifier[$id]))
        {
            if($a_verifier[$id]!=$reference[$id])
            {
                return false;      //l'element de cle $id n'appartient pas a $reference
            }
        }
    }
    return true;
}

/* <echo> : implementer la classe="on" (dans le header)  */
function is_on(string $page,string $area)
{
    if($page===$area)
    {
        echo "class=\"on \" ";
    }
    else{
        echo "href=\"".$area.".php\" ";
    }
}

/*  <array|string |null>  : verifier si les saisi dans le login est dans le data */
function take_user(string $mail,string $passwd,string $link)
{
    $resource=fopen($link."data.txt","r"); //ouvre le fichier
    if(!empty($resource))
    {
        $ligne=fgets($resource);                                    //assigne la premiere ligne
        while(!empty($ligne))
        {
            $tableau=explode("::",$ligne,8);                            //separe les donnees de la lignes et entre dans le tableau 
            if(($tableau[4]==="email=".$mail))                          //si cette ligne coorespond a notre cher utilisateur
            {
                if($tableau[5]==="mdp=".$passwd)
                {
                    foreach($tableau as $assignation)                           //on parcour le tableau et rendre certain donne comme cles du tableau
                    {
                        $table=explode("=",$assignation);
                        $user[$table[0]]=$table[1];
                    }   
                    return $user;
                }
                // echo "<h1 class=\"error\" > mot de passe incorrect</h1>";   //on retourne alors le donne de l'utiisateur trouver sous forme tableau
                return "errorpasswd";
            }
            $ligne=fgets($resource);                                    //sinon on prend la ligne suivant du texte
        }
        // echo "<h1 class=\"error\" > aucun compte coorespondant au mail</h1>";
        return "errormail";                                                //on retoure null si le nom n'est pas un utilisateur
    }
    else {
        // echo "<h1 class=\"error\" > ERREUR D'OUVERTURE FICHIER</h1>";
    }
    return null; 
    echo "<h1 class=\"error\" > fichier vide</h1>";             //sinon on retourne null si le fichier est vide
}

function addToData(array $newMember){
    $cloneAccount=take_user($newMember["email"],$newMember["mdp"],"./");
    if(is_array($cloneAccount))
    {
        return false;
    }
    foreach($newMember as $name=>$valeur_inserer)
    {
        file_put_contents("data.txt",$name."=".$valeur_inserer."::",FILE_APPEND);
    }
    file_put_contents("data.txt","\n",FILE_APPEND);
    return true;
}
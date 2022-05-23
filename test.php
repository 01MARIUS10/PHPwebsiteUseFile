<?php
    require "./config/db-config.php";
    // phpinfo();
    // exit;

try{
    $PDO=new PDO($DB_DNS,$DB_USER,$DB_PASS);
    echo "connexion a la base de donne OK! <br>";
    var_dump($PDO);
    echo '<br>';
    print_r($PDO);
    
}
catch(PDOException $pe){
    echo "l'erreur est :".$pe->getMessage();
}


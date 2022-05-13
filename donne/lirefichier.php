<?php
    // $resource=fopen("data.txt","r");
    if(!empty($resource))
    {
        $ligne=fgets($resource);
        while(!empty($ligne))
        {
            $tableau=explode("::",$ligne,8);
            foreach($tableau as $assignation)
            {
                $table=explode("=",$assignation);
                $resultat[$table[0]]=$table[1];
                echo "\$resultat[".$table[0]."]=".$table[1]."\n" ;
            }
            echo"--------------------------------------------------------\n";
            $ligne=fgets($resource);
        }
        
    }

?>
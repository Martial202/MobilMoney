<?php
     function modifier($table, array $data,$cnx)
    {
         // Premeiere partie UPDATE table SET 
           $sql = "UPDATE $table SET ";
         // Maintenant nous allons compter les elements de DATA
           $a = count($data);
         // Declaration de variable $n qui va defiler le tableau $data une variable reference $ref
            $n = 0;
            $ref = "";
            //Deuxieme partie $key=?, $key1=? 
         // algorithme permettant de parcourir le tableau
            foreach ($data as $key => $value) {
                    $n++;
                    //l'avant dernier element 
                    if ($n == $a-1) {
                        $sql .= $key.'=? ';
                       // le dernier element
                    } elseif($n == $a) {
                        $ref = $key;
                       // ni dernier ni avant dernier	
                    }else{
                        $sql .= $key."=?, ";
                    }
            }
            // Troisieme partie WHERE $ref =?
             $sql .= " WHERE ".$ref."=?";
             // Remplissage du tableau $tableau
            $tableau = array();
            $x = 0;
                 foreach ($data as $key => $value) {
                     $tableau[$x] = $value;
                     $x++;
                 }
             // Preparons le requete 
             $query = $cnx->prepare($sql);
             // Executons la requete
             $query->execute($tableau);

    }
?>
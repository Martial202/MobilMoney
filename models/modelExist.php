<?php
  

     function exist($cnx,$table, $champ, $value)
    {
        $result = false;
        try {
            $req = "SELECT * FROM $table WHERE $champ =?";
            $query = $cnx->prepare($req);
            $query->execute([$value]);
            if ($query->rowCount()!=0) {
               $result = true;
            }

        } catch (Exception $e) {
           die($e->getMessage());
        }
        return $result;
    }

?>
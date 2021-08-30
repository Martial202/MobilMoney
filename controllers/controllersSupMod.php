<?php
      include './models/modelModif.php';
      include './includes/cnx.php';
       //Bouton Modifier
          if (isset($_GET['mod'])) {
             extract($_GET);
             $data = array("refcharg" => $mod );
             //var_dump(selectAllByItems("chargement", $data, $cnx));die();
             foreach (selectAllByItems("transaction", $data, $cnx) as $data) {
                echo $data['heigth'].'<br>';
             }
          
          }
       // Bouton Supprimer un element sur l'interface
          if (isset($_GET['sup']) && !empty($_GET['sup'])) {
               extract($_GET);
               $data = array(
                 "stat_sup" => 0,
                 "id_tra" => $sup
               );
               modifier("transaction", $data, $cnx);
          }




?>
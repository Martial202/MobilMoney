<?php 
     
     $idClient = $_SESSION['iduser'];
      
      	   $req = "SELECT * FROM transaction WHERE id_user =?";
             $req_b = $cnx->prepare($req);
             $req_b->execute(array($idClient)) or die(print_r($req_b->errorInfo()));
                $supp = "";
              if (isset($_POST['sup'])) {
                $supp = $_GET['sup'];
              }
              var_dump($supp);
 ?>


<div class="list-group">
  <a href="#" class="list-group-item disabled" style="background-color: orange; text-transform: uppercase;font-family: cursive; color: white; text-align: center;">liste des transactions
  </a>
  <a href="#" class="list-group-item" style=" text-transform: uppercase;font-family: cursive; color: blue; text-align: center; height: 350px;width: 100%"><br><br>
       
                      <div class="row">
                            <div class="col-md-12">
                               <div class="table-responsive" style="margin-top: -35px;">
                          <table class="table table-dark table-bordered table-striped">
                            <thead class="thead-light">
                              <tr>
                                <th>ID TRANSACTION</th>
                                <th>NUMERO</th>
                                <th>MONTANT</th>
                                <th>OPERATION</th>
                                <th>RESEAU</th>
                                <th>ACTION</th>
                              </tr>
                            </thead>
                            <?php 
                                while ($reine = $req_b->fetch()) {
                                  
                             ?>
                            <tbody>
                                <tr>
                                <td colspan="" rowspan="" headers=""><?=$reine['ref_tra']?></td>
                                <td colspan="" rowspan="" headers=""><?=$reine['num_tra']?></td>
                                <td colspan="" rowspan="" headers=""><?=$reine['mont_tra']?></td>
                                <td colspan="" rowspan="" headers=""><?=$reine['op_tra']?></td>
                                <td colspan="" style="text-transform: uppercase;" rowspan="" headers=""><?=$reine['reso_tra']?></td>
                                <td colspan="" rowspan="" headers="">
                                	<a href="page.php?page=list&?$mod=<?=$reine['id_tra']?>"><button class="btn btn-primary" style="height: 17px; font-size: 11px; line-height: 04px">Modifier</button></a>
                                	<a href="page.php?page=list&?sup=<?=$reine['id_tra']?>"><button class="btn btn-danger" name="sup" style="height: 17px; font-size: 11px; line-height: 00px">Supprimer</button></a>
                                </td>
                                </tr>
                                
                            </tbody>
                            <?php  
                                }
                           ?>
                          </table>
                      </div>
                      </div>
                      </div>    
                       

  </a>
                               </div>
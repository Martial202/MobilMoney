<?php 
include 'cnx.php';
   $iduser = $_SESSION['iduser'];
   // On détermine sur quelle page on se trouve
   if(isset($_GET['page']) && !empty($_GET['page'])){
       $currentPage = (int) strip_tags($_GET['page']);
   }else{
       $currentPage = 1;
   }
   
   // On détermine le nombre total de transaction
   $sql = 'SELECT COUNT(*) AS nb_bord FROM transaction WHERE stat_sup=? AND id_user =?  ';
   // On prépare la requête
   $query = $cnx->prepare($sql);
   
   // On exécute
   $query->execute(array(1,$iduser));
   
   // On récupère le nombre de transaction
   $result = $query->fetch();
   
   
   $nbBord = (int) $result['nb_bord'];
   // On détermine le nombre de transaction par page
   $parPage = 5;
   
   // On calcule le nombre de pages total
   $pages = ceil($nbBord / $parPage);
   
   // Calcul du 1er article de la page
   $premier = ($currentPage * $parPage) - $parPage;
   
   $sql = "SELECT * FROM transaction WHERE stat_sup=? AND id_user = ? ORDER BY id_tra DESC LIMIT $premier , $parPage";
   
   // On prépare la requête
   $query = $cnx->prepare($sql);
   
   /*$query->bindValue(':id_user',$iduser, PDO::PARAM_INT);
   $query->bindValue(':premier', $premier, PDO::PARAM_INT);
   $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);*/
   
   // On exécute
   $query->execute(array(1,$iduser));
   
   // On récupère les valeurs dans un tableau associatif
   $transaction = $query->fetchAll();  
   include 'controllers/controllersSupMod.php';
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
                                      <th>#</th>
                                      <th>ID transaction</th>
                                      <th>NUMERO</th>
                                      <th>MONTANT</th>
                                      <th>OPERATION</th>
                                      <th>RESEAU</th>
                                      <th>ACTION</th>
                                   </tr>
                                 </thead>
                                <tbody>
                                    <?php 
                                        $i = 0;
                                        foreach($transaction as $reine){
                                           $i++;
                                           ?>
                                      <tr>
                                        <td colspan="" rowspan="" headers=""><?=$i?></td>
                                        <td colspan="" rowspan="" headers=""><?=$reine['ref_tra']?></td>
                                        <td colspan="" rowspan="" headers=""><?=$reine['num_tra']?></td>
                                        <td colspan="" rowspan="" headers=""><?=$reine['mont_tra']?></td>
                                        <td colspan="" rowspan="" headers=""><?=$reine['op_tra']?></td>
                                        <td colspan="" style="text-transform: uppercase;" rowspan="" headers=""><?=$reine['reso_tra']?></td>
                                        <td colspan="" rowspan="" headers="">
                                       	<a href="page.php?pageT=list&$mod=<?=$reine['id_tra']?>"<button class="btn btn-primary" style="height: 17px; font-size: 11px; line-height: 04px">Modifier</button></a>
                                	      <a href="page.php?pageT=list&sup=<?=$reine['id_tra']?>"<button class="btn btn-danger" name="sup" style="height: 17px; font-size: 11px; line-height: 00px">Supprimer</button></a>
                                          </td>
                                      </tr>
                                   <?php  
                                         }
                                    ?>
                                 </tbody>
                             </table>
                      </div>
                    </div>
          </div>   
                       
         </a>
                             <nav>
                                <ul class="pagination">
                                   <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                                 <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                                 <a href="page.php?pageT=list&page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                                  </li>
                                        <?php for($page = 1; $page <= $pages; $page++): ?>
                                       <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                                     <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                     <a href="page.php?pageT=list&page=<?= $page ?>" class="page-link"><?= $page ?></a>
                                    </li>
                                        <?php endfor ?>
                                    <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                                      <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                                  <a href="page.php?pageT=list&page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                                </li>
                            </ul>
                                 </nav>
  </div>
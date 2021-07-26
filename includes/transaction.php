<?php 
  $num="";
  $reso="";
  $hidden="";
  $D = date('Y/m/d');
  $I = date('H:i:s');
  $idUser = $_SESSION['iduser'];
  $error = "";
  $error1 = "";
  $color = "";

     if (isset($_POST['save'])) {
         $ref = filter_input(INPUT_POST, 'ref', FILTER_SANITIZE_STRING);
         $num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
         $mont = filter_input(INPUT_POST, 'mont', FILTER_SANITIZE_STRING);
         $selectop = filter_input(INPUT_POST, 'selectop', FILTER_SANITIZE_STRING);
             $substr = substr($num, 0,2);
             
           if ($substr==07) {
             $reso = "Orange";
           } elseif($substr==05) {
             $reso = "MTN";
           }elseif($substr==01){
            $reso = "Moov";
           }

          $R = empty($ref);
         $N = empty($num);
         $M = empty($mont);
         $O= empty($selectop);
         $Rs = empty($reso);

         $req = 'INSERT INTO transaction SET ref_tra=?, num_tra=?, mont_tra=?, op_tra=?, reso_tra=?, dat_tra=?, heu_tra=?, id_user=?';
           $query = $cnx->prepare($req);
           $Nadege = array($ref,$num,$mont,$selectop,$reso,$D,$I,$idUser);
           if ($R || $N || $M || $O || $Rs) {
            $error = 'Oupss!!! ';
             $error1 = 'Veuillez remplir tous les champs';
             $color = 'danger';
           }elseif ($query->execute($Nadege) or die(print_r($query->errorInfo()))) {
            $error = 'Bravo!!! ';
            $error1 = 'Enregistrement de la transaction effectué avec succes';
            $color = 'success';
            
           }else{
             $error = 'Oupss!!! ';
            $error1 = 'Enregistrement de la transaction a echoué';
            $color = 'danger';
           }
     }
       if (empty($error) && empty($error1)){
      $hidden='hidden';
   
    } else {
      $hidden='';
    }
            

 ?>


<div class="list-group">
  <a href="#" class="list-group-item disabled" style="background-color: orange; text-transform: uppercase;font-family: cursive; color: white; text-align: center;">transactions
  </a>
  <a href="#" class="list-group-item" style=" text-transform: uppercase;font-family: cursive; color: blue; text-align: center; height: 350px;width: 100%"><br><br>
    	<form method="POST" action=""> 
                             <!-- page information -->
                               
                             <!-- fin de page information -->
                          
                                <div class="card bg-dark text-light"  style="width: 100%; margin-left: 0px; margin-top: -40px">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="card-body">
                                        <h4 class="header-title">Enregistrer la transaction</h4>
                                    </div>
                                  </div>

                               </div>
                                        <div class="row">
                                          <div class="col-md-2"></div><!-- end col -->
                                            <div class="col-md-4">
                                                <p class="mb-1 mt-3 font-weight-bold text-muted">reference de la Transaction<br><b class="text-muted font-14">Ex: IDXX.XXX.XX.X </b>
                                                <input class="select2 form-control select2-multiple" data-toggle="select2" name="ref" multiple="multiple" data-placeholder="Choose ..." required autofocus="" />
                                                    </p>
                                            </div> <!-- end col --> 

                                            <div class="col-md-4">
                                                <p class="mb-1 mt-3 font-weight-bold text-muted"> Numero de la transaction <br>
                                                  <b class="text-muted font-14">Ex: 0XXXXXXXXX</b>
                                                <input class="select2 form-control select2-multiple" data-toggle="select2" name="num" multiple="multiple" data-placeholder="Choose ..." required />
                                                  </p>  
                                            </div> <!-- end col -->
                                          <div class="col-md-2"></div><!-- end col -->
                                        </div> <!-- end row -->
                                        <div class="row">
                                          <div class="col-md-2"></div><!-- end col -->
                                            <div class="col-md-4">
                                                <p class="mb-1 mt-3 font-weight-bold text-muted">
                                                  Montant de la transaction
                                                <br>
                                                  <b class="text-muted font-14">Ex:20000 </b></p>
                                                <input class="select2 form-control select2-multiple" data-toggle="select2" name="mont" multiple="multiple" data-placeholder="Choose ..." required />
                                              
                                            </div>
                                            <div class="col-md-4">
                                              <p class="mb-1 mt-3 font-weight-bold text-muted"> Operation <br>
                                                  <b class="text-muted font-14">Ex: Depot/Retrait</b></p>
                                                  <select class="form-control" required style="" name="selectop">
                                                  <option value="0" selected> -- choisir ton Bon -- </option>
                                                  <option value="Depot">Depot</option>
                                                  <option value="Retrait">Retrait</option>
                                                       </select>
                                                
                                            </div><!-- end col -->
                                          <div class="col-md-2"></div><!-- end col -->
                                        </div> <!-- end row --><br> <br>  
                                        <div class="row"> 
                                          <div class="col-md-1"></div><!-- end col -->
                                          <div class="col-md-10">
                                           <div class="form-group">
                                             <button name="save" class="btn btn-primary form-control" require type="submit"><i class="mdi mdi-pen"></i>Enregistrer
                                              </button>
                                          </div><!-- form-group -->
                                        </div><!-- end col -->
                                          <div class="col-md-1"></div><!-- end col -->
                                        </div><!-- end row -->
                                </div> <!-- end card-->
                        </form>
    </a>
 </div><!--end list-group-->
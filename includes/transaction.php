<div class="list-group">
  <a href="#" class="list-group-item disabled" style="background-color: orange; text-transform: uppercase;font-family: cursive; color: white; text-align: center;">transactions
  </a>
  <a href="#" class="list-group-item" style=" text-transform: uppercase;font-family: cursive; color: blue; text-align: center; height: 350px;width: 100%"><br><br>
       
       <div class="row">
       	<form method="POST" action=""> 

                           <div class="row">
                            <div class="col-12">
                                <div class="card bg-default text-light">
                                    <div class="card-body">
                                        <h4 class="header-title">Editer bordereau</h4>

                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4">
                                                <p class="mb-1 mt-3 font-weight-bold text-muted">Poids Du Chargement<br><b class="text-muted font-14">Ex: 200 T</b>
                                                <input class="select2 form-control select2-multiple" data-toggle="select2" name="poids" multiple="multiple" data-placeholder="Choose ..." required />
                                                    </p>
                                            </div> <!-- end col --> <!-- end col -->

                                            <div class="col-md-4">
                                                <p class="mb-1 mt-3 font-weight-bold text-muted"> Nombre De Chargement <br>
                                                  <b class="text-muted font-14">Ex: 4 Chargements</b>
                                                <input class="select2 form-control select2-multiple" data-toggle="select2" name="nombre" multiple="multiple" data-placeholder="Choose ..." required />
                                                  </p>  
                                            </div> <!-- end col -->
                                            <div class="col-md-2"></div>

                                        </div> <!-- end row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                              <p class="mb-1 mt-3 font-weight-bold text-muted">Type De Graviers
                                              <br><b class="text-muted font-14">Ex:gravier gros grains</b></p>
                                                <select class="form-control" required style="" name="selectgrav">
                                                    <option value="0" selected> -- choisir ton gravier -- </option>
                                                    <!-- <?php
                                                       $req = "select * from gravier";
                                                       $req_e = $cnx->prepare($req);
                                                       $req_e->execute();
                                                       while ($grav = $req_e->fetch()) {
                                                       echo'<option value=' . $grav['id_gravier'] . '>' . $grav['lib_gravier'] . '</option>';
                                                             }
                                                        ?> -->    
                                                       </select> 
                                              
                                            </div>
                                            <div class="col-md-4">
                                                <p class="mb-1 mt-3 font-weight-bold text-muted">Bons Du Chargement
                                                <br>
                                                  <b class="text-muted font-14">Ex:Super Bons Annuel</b></p>
                                                  <select class="form-control" required style="" name="selectbon">
                                                  <option value="0" selected> -- choisir ton Bon -- </option>
                                                    <!-- <?php
                                                       $req = "select * from bon";
                                                           $req_e = $cnx->prepare($req);
                                                           $req_e->execute();
                                                           while ($bon = $req_e->fetch()) {
                                                          echo'<option value=' . $bon['id_bon'] . '>' . $bon['libelle'] . '</option>';
                                                           }
                                                        ?>    --> 
                                                       </select>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <p class="mb-1 mt-3 font-weight-bold text-muted">Chauffeur Du Chargement
                                                <br>
                                                  <b class="text-muted font-14">Ex: Kouame Martial/b></p>
                                                  <select class="form-control" required style="" name="selectChauf">
                                                  <option value="0" selected> -- choisir ton chauffeur -- </option>
                                                    <!-- <?php
                                                       $req = "SELECT * FROM chauffeur WHERE id_client=?";
                                                       $req_e = $cnx->prepare($req);
                                                       $req_e->execute(array($idC));
                                                       while ($grav = $req_e->fetch()) {
                                                       echo'<option value=' . $grav['id_chauff'] . '>' . $grav['Namedriver'] .' ' . $grav['firstNamesdriver'] . '</option>';
                                                             }
                                                        ?>       -->
                                                   </select>
                                                
                                            </div>
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>  <!-- end row-->
                        </form>

  </a>
                               </div>
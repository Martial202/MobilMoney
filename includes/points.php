   <?php
     include 'cnx.php';
	    // Point ORANGE
		      //depot
			    $depotOrange = "";
			  $req = " SELECT sum(mont_tra) as montDep FROM transaction WHERE op_tra='depot'  AND stat_sup=1 AND reso_tra='orange' ";
			  $query = $cnx->prepare($req);
			  $query->execute();
			  $montant = $query->fetch();
			  if ($montant['montDep']==null) {
				  $depotOrange = 0;
			  }else {
				  $depotOrange = $montant['montDep'];
			  }
			  //retrait
			  $retraitOrange = "";
			  $req = " SELECT sum(mont_tra) as montRet FROM transaction WHERE op_tra='retrait'  AND stat_sup=1 AND reso_tra='orange' ";
			  $query = $cnx->prepare($req);
			  $query->execute();
			  $montant = $query->fetch();
			  if ($montant['montRet']==null) {
				  $retraitOrange = 0;
			  }else {
				  $retraitOrange = $montant['montRet'];
			  }
		// FIN point orange
		// Point Mtn
		      //depot
			  $depotMtn = "";
			  $req = " SELECT sum(mont_tra) as montDep FROM transaction WHERE op_tra='depot'  AND stat_sup=1 AND reso_tra='Mtn' ";
			  $query = $cnx->prepare($req);
			  $query->execute();
			  $montant = $query->fetch();
			  if ($montant['montDep']==null) {
				  $depotMtn = 0;
			  }else {
				  $depotMtn = $montant['montDep'];
			  }
			  //retrait
			  $retraitMtn = "";
			  $req = " SELECT sum(mont_tra) as montRet FROM transaction WHERE op_tra='retrait'  AND stat_sup=1 AND reso_tra='Mtn' ";
			  $query = $cnx->prepare($req);
			  $query->execute();
			  $montant = $query->fetch();
			  if ($montant['montRet']==null) {
				  $retraitMtn = 0;
			  }else {
				  $retraitMtn = $montant['montRet'];
			  }
		// FIN point Mtn
		// Point Moov
		      //depot
			  $depotMoov = "";
			  $req = " SELECT sum(mont_tra) as montDep FROM transaction WHERE op_tra='depot'  AND stat_sup=1 AND reso_tra='Moov' ";
			  $query = $cnx->prepare($req);
			  $query->execute();
			  $montant = $query->fetch();
			  if ($montant['montDep']==null) {
				  $depotMoov = 0;
			  }else {
				  $depotMoov = $montant['montDep'];
			  }
			  //retrait
			  $retraitMoov = "";
			  $req = " SELECT sum(mont_tra) as montRet FROM transaction WHERE op_tra='retrait' AND stat_sup=1  AND reso_tra='Moov' ";
			  $query = $cnx->prepare($req);
			  $query->execute();
			  $montant = $query->fetch();
			  if ($montant['montRet']==null) {
				  $retraitMoov = 0;
			  }else {
				  $retraitMoov = $montant['montRet'];
			  }
		// FIN point Moov
   ?>

<div class="list-group">
  <a href="#" class="list-group-item disabled" style="background-color: orange; text-transform: uppercase;font-family: cursive; color: white; text-align: center;">les points
  </a>
  <a href="#" class="list-group-item" style=" text-transform: uppercase;font-family: cursive; color: blue; text-align: center; height: 350px;width: 100%"><br><br>
       
       <div class="row">
       	  <div class="col-md-4" style="border:6px solid white;margin-top: -35px; border-radius: 10px; background-color:orange">
       	  	<h3 style="font-size:12px; color:white;"><b><u>Point Orange du jour</u></b></h3>
				 <table class="table table-dark table-bordered table-striped">
					    <tr>
						 <th><label for="">Depot :</label></th>
						 <th><label for=""><?=$depotOrange?></label></th>
						</tr> 
						<tr>
							 <th><label for="">Retrait : </label></th>
							 <th><label for=""><?=$retraitOrange?></label></th>
						</tr>
						
					 
				 </table>
       	  </div>
       	  <div class="col-md-4" style="border:6px solid white;margin-top: -35px; border-radius: 10px; background-color: yellow">
       	  <h3 style="font-size:12px; color:black;"><b><u>Point Mtn du jour</u></b></h3>
			 <table class="table table-dark table-bordered table-striped">
					    <tr>
						 <th><label for="">Depot :</label></th>
						 <th><label for=""><?=$depotMtn?></label></th>
						</tr> 
						<tr>
							 <th><label for="">Retrait : </label></th>
							 <th><label for=""><?=$retraitMtn?></label></th>
						</tr>
						
					 
				 </table>
       	  </div>
       	  <div class="col-md-4" style="border:6px solid white;margin-top: -35px; border-radius: 10px; background-color: blue;color:white">
       	  <h3 style="font-size:12px; color:white;"><b><u>Point Moov du jour</u></b></h3>
			 <table class="table table-dark table-bordered table-striped">
					    <tr>
						 <th><label for="">Depot :</label></th>
						 <th><label for=""><?=$depotMoov?></label></th>
						</tr> 
						<tr>
							 <th><label for="">Retrait : </label></th>
							 <th><label for=""><?=$retraitMoov?></label></th>
						</tr>
						
					 
				 </table> 
       	  </div>
       </div>
       <div class="row">
       	  <div class="col-md-12" style="border:6px solid white; border-radius: 10px; background-color: blue;color:white">
       	  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       	  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       	  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
       	  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
       	  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
       	  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       	  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       	  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       	  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
       	  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
       	  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
       	  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       	  </div>
       </div>

  </a>
                               </div>
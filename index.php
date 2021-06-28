<?php 

session_start();
include './includes/cnx.php';
$l="";
         $msg1= "";
         $msg2="";
if (isset($_POST['signin'])) {

    $Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
    $Password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);

    if (empty($Email) || empty($Password)) {
        if (trim($Email) == "") {
          $msg1='champ est vide!';
          $msg2='Tous les champs sont requis.';
          
        }

        if ($Password == "") {
          $msg1='champ est vide!';
          $msg2='Tous les champs sont requis.';
            
        }
    } else {
        $mainSql = "SELECT * FROM user WHERE pseu_user=? AND mdp_user=?";
        $mainResult = $cnx->prepare($mainSql);
         $mainResult->execute(array($Email,$Password));
         if ($l = $mainResult->fetch()) {
           $_SESSION['iduser'] = $l['id_user'];
        $_SESSION['nom_user'] = $l['nom_user'];
        $_SESSION['pren_user'] = $l['pren_user'];
        $_SESSION['pseu_user'] = $l['pseu_user'];
        $_SESSION['mdp_user'] = $l['mdp_user'];
        $_SESSION['stat_user'] = $l['stat_user'];

        }else{
            $msg1='Erreur!';
            $msg2='pseudo ou mot de passe incorrect.'; 
        }
        }

        if ( $_SESSION['stat_user']==0){
            ?>
            <script>
                window.location.href="page.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                window.location.href="pages1.php";
            </script>
            <?php
            } 

        
    }
    
    if (empty($msg1) && empty($msg2)){
      $hidden='hidden';
   
    } else {
      $hidden='';
    }
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/cad1" style="width: 200%">

    <title>MobilMoney</title>

    <link rel="canonical" href="">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center" style="background-color: orange;">
    <b style="color: white"> </b>
    
    <form class="form-signin" method="POST" action="">
      <h1 class="h2 mb-3 font-weight-normal" style="color: white;"><b>Se Connecter ici</b></h1>
      <label for="inputEmail" class="sr-only"></label>
      <input type="text" name="Email" id="" class="form-control" placeholder="Pseudo ou Nom Utilisateur"  autofocus><br>
      <label for="inputPassword" class="sr-only"></label>
      <input type="password" name="Password"  class="form-control" placeholder="Password ou Mot de Passe" >
      <div class="checkbox mb-3">
        <br>
      </div>
      <div class="alert alert-warning alert-dismissible fade show" role="alert"<?=$hidden?>>
  <strong><?=$msg1?></strong><?=$_SESSION['nom_user']?>
  <a href="index.php">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></a>
</div>
      <button type="submit" class="btn btn-lg btn-primary btn-block"  name="signin">Sign in</button>
      <p class="mt-5 mb-3 text-muted"> <b style="color: white">&copy;2020-2021</b></p>
    </form>
  </body>
</html>
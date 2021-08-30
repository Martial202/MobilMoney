<?php 
 session_start();

include './includes/cnx.php';
$date = date('d/M/Y');
$heure = date('H:i:s');
 $error = "";
  $error1 = "";
  $color = "";
  $hidden = "";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/cad1" style="width: 200%">

    <title>MobilMoney</title>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="./css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/NewsGoth_400.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_700.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_Lt_BT_italic_400.font.js" type="text/javascript"></script>
    <script src="js/Vegur_400.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>
<body id="page5">
    <div class="extra">
        <!--==============================header=================================-->
        <header>
            <div class="bg-dark" style="height: 100px">
                <div class="main">
                        <img src="img/logo1.png" width="280"><b class="date" style="display: block;margin-left: 800px; margin-top: -60px;width: 30%;height: 70px;line-height: 70px; color: white;font-family: cursive; font-size: 25px"> <?=$date?> <?=$heure?></b>
                </div>
            </div>
            <div class="menu-row">
                <div class="menu-bg" style="background-image: url(img/menu.png);width: 100%; background-repeat: repeat;">
                    <div class="main">
                        <nav class="indent-left">
                            <ul class="menu wrapper">
                                <li><a href="#"><?=$_SESSION['nom_user']?></a></li>
                                <li><a href="#"><?=$_SESSION['pren_user']?></a></li>
                                <li><a href="company.php"></a></li>
                                <li><a href="projects.php"></a></li>
                                <li><a href="./includes/deconnection.php">deconnexion</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        
        <!--==============================content================================-->
        <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. December10, 2011!</div>
            <div class="content-bg">
                <div class="main">
                    <div class="container_12">
                         <div class="row">
                               <div class="col-md-2.5" style="margin-left: -100px;">
                                   <div class="list-group">
  <a href="#" class="list-group-item disabled" style="background-color: orange; text-transform: uppercase;font-family: cursive; color: white; text-align: center;">menu
  </a>
  <a href="page.php?pageT=transaction" class="list-group-item" style=" text-transform: uppercase;font-family: cursive; color: orange; ;"> <b>tansactions</b></a>
  <a href="page.php?pageT=list" class="list-group-item" style=" text-transform: uppercase;font-family: cursive; color: orange; ;"><b>liste des transactions</b></a>
  <a href="page.php?pageT=points" class="list-group-item" style=" text-transform: uppercase;font-family: cursive; color: orange; ;"><b>les points</b></a>
  <a href="page.php?pageT=recettes" class="list-group-item" style=" text-transform: uppercase;font-family: cursive; color: orange; ;"><b>listes des recettes</b></a>
</div>
                               </div>

                               <div class="col-md-12" style="width: 120%;margin-left: 120px; margin-top: -211px">

                                   <?php 

                                    switch (@$_GET['pageT']) {
                                      case 'transaction':
                                        include 'includes/transaction.php';
                                        break;
                                      case 'list':
                                        include 'includes/liste.php';
                                            $hidden = "hidden";
                                        break;
                                      case 'points':
                                        include 'includes/points.php';
                                            $hidden = "hidden";
                                        break;
                                      case 'recettes':
                                        include 'includes/recettes.php';
                                            $hidden = "hidden";
                                        break;
                                      
                                      default:
                                        include 'includes/transaction.php';
                                        break;
                                    }

                                    ?>
                                    <!-- Information -->
                                           <div class="alert alert-<?=$color?> alert-dismissible border-0 fade show" role="alert" <?=$hidden?>>
                                <a href=""><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></a>
                                <strong> <?= $error; ?></strong><?= $error1; ?>
                            </div>
                                     <!-- Fin information -->
                           </div>
                        </div>
                    </div>
                </div>
                <div class="block"></div>
            </div>
        </section>
        <footer id="footer" style="margin-top: -400px; height: 60px; text-align: center;line-height: 50px; color: white"><b>Copyrigth°MobilMoney-2021</b></footer>
    </div>
    
    <!--==============================footer=================================-->

    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

<?PHP

include "../../controller/userC.php";
include "../../controller/clientC.php";
session_start();
if($_SESSION['login_user']== "meryemdagh")
{
  header('Location: ../back/index.php');
  exit;
}else{
if( isset($_POST['login_user']) 
&& isset($_POST['mdp_user']) 

 ) 
 { 
     if( !empty($_POST['login_user']) &&
     !empty($_POST['mdp_user']) )
        {
        $admin= new userC($_POST['login_user'],$_POST['mdp_user']);
      
        if($admin->authentification($_POST['login_user'],$_POST['mdp_user']))
        {
          $admin1= $admin->authentification($_POST['login_user'],$_POST['mdp_user']);
          $_SESSION['login_user'] =  $admin1['login_user'];
          $_SESSION['cin'] = $admin1['cin'];
         
         // $_SESSION['mdp_user'] = $admin['mdp_user'];
        // echo $_SESSION['login_user'] ;
          echo '<script> alert(" ok ");
          </script>';
            header('Location: ../back/index.php');
            exit;
          }
          else
              {
                $client = new clientC($_POST['login_user'],$_POST['mdp_user']);
                if($client->authentificationClient($_POST['login_user'],$_POST['mdp_user']))
                {
                  $client1= $client->authentificationClient($_POST['login_user'],$_POST['mdp_user']);
                  $_SESSION['login_user'] =  $client1['email'];
                  $_SESSION['cin'] = $client1['cin'];
                  $_SESSION['idc'] = $client1['id_client'];
                 // echo $_SESSION['login_user'];
                  echo '<script> alert(" ok ");
                  </script>';
                    header('Location: index.php');
                    exit;
                  }
                  else {
                     echo '<script> alert(" votre ID ou  votre mot de passe ne correspondent pas ");
                        </script>';}
 
              }


          
        }
   else 
       {
        echo '<script> alert(" Entrer votre Mdp et votre Login ");
        </script>';
       } 
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>ReyDelMéxico | Home</title>

    <!-- Favicon 
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">-->

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       

           <!--  Text based logo  -->
          <a class="navbar-brand" href="index.php">Rey Del<br>Méx<span>I</span>co</a> 

		      <!--  Image based logo  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
          <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="index.php#mu-about-us">A PROPOS DE NOUS</a></li>                                          
            <li><a href="index.php#mu-reservation">RESERVATION</a></li>           
            <li><a href="index.php#mu-gallery">GALLERY</a></li>
            <li><a href="index.php#mu-chef">NOS CHEFS</a></li> 
            <li><a href="index.php#mu-evenement">EVENEMENT</a></li> 
            <li><a href="ethos.html">ETHOS</a></li>  
            <li><a href="menu.php">MENU</a></li>  
          </ul>  
          <a href="panier.php"> <img style="position: absolute ;left: 1300px ;bottom: 5px"  src="assets/img/panier.png" width="25" height="25" alt="tab img"></a> 
          <a href="connexion.php"> <img style="position: absolute ;left: 1250px ;bottom: 5px" src="assets/login.jpg" width="25" height="25" alt="tab img"></a> 
          <a href="../back/logOut.php"> <img style="position: absolute ;left: 1300px ;bottom: 60px" src="assets/logout.jpg" width="20" height="20" alt="tab img"></a>                

        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->

 <!-- khedma lkol lena-->
 <!-- Start Reservation section -->
 <section id="mu-connexion">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-connexion-area">

            <div class="mu-title">
                <br><br><br>
              <span class="mu-subtitle">Se connecter </span>
              
            </div>

            <div class="mu-connexion-content">
              
              <div class="col-md-6">
                <div class="mu-connexion-left">
                  <form action="" method="POST" class="mu-connexion-form">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">                       
                          <input type="text" class="form-control" required name="login_user" id="login_user" placeholder="Votre login">
                        </div>
                    </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="password" class="form-control" required name="mdp_user" id="mdp_user" placeholder="Votre mot de passe">              
                        </div>
                      </div>
                      
                      <button type="submit" class="mu-readmore-btn">Se connecter</button>
                      <a href="inscription.php"> <button type="button" class="mu-readmore-btn">S'inscrire</button> </a>
                    </div>
                  </form>    
                </div>
              </div>

              <div class="col-md-5 col-md-offset-1">
                <div class="mu-connexion-right">
                  <div class="mu-opening-hour">
                    <h2>Horaire de travail</h2>
                      <ul class="list-unstyled">
                        <li>
                            <p>Lundi &amp; Mardi</p>
                            <p>9:00 AM - 4:00 PM</p>
                        </li>
                        <li>
                            <p>Mercredi &amp; Jeudi</p>
                            <p>9:00 AM - Mi-nuit</p>
                        </li>
                        <li>
                            <p>Vendredi &amp; Samedi</p>
                            <p>9:00 AM - Mi-nuit</p>
                        </li>
                        <li>
                            <p>Dimanche</p>
                            <p>9:00 AM - 11:00 PM</p>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="https://www.facebook.com/"><span class="fa fa-facebook"></span></a>
            <a href="https://twitter.com/login?lang=fr"><span class="fa fa-twitter"></span></a>
            <a href="https://www.google.com/"><span class="fa fa-google-plus"></span></a>
            <a href="https://www.linkedin.com/login/fr"><span class="fa fa-linkedin"></span></a>
            <a href="https://www.youtube.com/watch?v=SJ2VQ-JMrbg"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright 2021.Tous droits réservés.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>

<?php
session_start();
include "../../controller/commandeC.php";

 $commandeC=new commandeC();
 
    $listcommande=$commandeC->affichercommande();
    $N=0;
    
    $N=$list['nb'];

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
          <a class="navbar-brand" href="index.html">Rey Del<br>Méx<span>I</span>co</a> 

		      <!--  Image based logo  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->
         

       
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="index.html">ACCUEIL</a></li>
            <li><a href="index.html#mu-about-us">A PROPOS DE NOUS</a></li>                       
                               
            <li><a href="index.html#mu-reservation">RESERVATION</a></li>           
            <li><a href="index.html#mu-gallery">GALLERY</a></li>
            <li><a href="index.html#mu-chef">NOS CHEFS</a></li> 
            <li><a href="index.html#mu-evenement">EVENEMENT</a></li> 
            <li><a href="ethos.html">ETHOS</a></li>  
            <li><a href="menu.php">MENU</a></li>  
          </ul>  
        
          <br>
         <br>

         <a href="panier.php"> <img style="position: absolute ;left: 1300px ;bottom: 5px"  src="assets/img/panier.png" width="25" height="25" alt="tab img"></a> 
          <a href="connexion.php"> <img style="position: absolute ;left: 1250px ;bottom: 5px" src="assets/login.jpg" width="25" height="25" alt="tab img"></a> 
          <a href="../back/logOut.php"> <img style="position: absolute ;left: 1300px ;bottom: 60px" src="assets/logout.jpg" width="20" height="20" alt="tab img"></a>                

               
                      
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  
 


  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <br><br><br>
              <span class="mu-subtitle">Découvrir</span>
              <br><br>
              <h2>votre commande</h2>
              
               <table class="table">
                <thead class="thead-dark">
                    <tr>
                       <th scope="col" style="font-weight: 1000;font-size: 15px"><center>id ligne</center></th>
        
         <th scope="col"style="font-weight: 1000;font-size: 15px"><center>nom de produit</center></th>
       
         <th scope="col"style="font-weight: 1000;font-size: 15px"><center>quantite</center></th>
        
       
        
            <th scope="col"style="font-weight: 1000;font-size: 15px"><center>total</center></th>
            <th scope="col"style="font-weight: 1000;font-size: 15px"><center>etat</center></th>
            <th scope="col"style="font-weight: 1000;font-size: 15px"><center>annuler la commande</center></th>
        

         



                    </tr>


                </thead>
                <?php




foreach ($listcommande as $row)
{
   $l=0;
   


 ?>    
    
        <tr valign="middle">
            
            <td align="center"><?php echo $row["id_commande"] ?></td>
            
           
            
            
            
            <td align="center"><?php echo $row["nomproduit"]?></td>
            <td align="center"><?php echo $row["qte"]?></td>
            <td align="center"><?php echo $row["prix_tot"].' '.'TND' ?></td>
            <td align="center"><?php echo $row["etat"]?></td>
            
       
           
            
                <td>
                
                    
          <input type="hidden" id="id_commande" name="id_commande" value="<?php echo $row["id_commande"] ?>">
          <input type="hidden" id="prix_tot" name="total" value="<?php echo $row["total"] ?>">
         
          <input type="hidden" id="client" name="client" value="<?php echo $row["client"] ?>">
          <center> <form action="supprimerlignecommande.php" method="get">
               
                    
               <input type="hidden" id="id_commande" name="id_commande" value="<?php echo $row["id_commande"] ?>">
                        
                       <button  class="btn btn-danger" type="submit" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>   </form></center>

          
               
                 

            
           
 
         
            
       
            
        </tr>
<?php
} ?>




               </table>
               </br>
               




                <?php ?>
        
           

 
 

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

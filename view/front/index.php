<?PHP

session_start();
include "../../controller/produitC.php";
include "../../controller/localC.php";
include "../../controller/fournisseurC.php";
include "../../controller/categorieC.php";
include "../../controller/chefC.php";
include "../../controller/categorieChefC.php";
include "../../controller/reclamationC.php";
include "../../controller/evenementC.php";
include '../../controller/reservationC.php';


$reclamation = null;
 $reclamationC = new  reclamationC();
 
 
 if (isset($_POST['sujet']) && isset($_POST['msg']))
  {
    
      if(!empty($_POST['sujet']) && !empty($_POST['msg']))
        { 
          if(!isset($_SESSION['idc'])){   header('Location:connexion.php'); } 
    
          else{
         $reclamation= new reclamation($_POST['msg'],$_POST['sujet'],0, $_SESSION['idc']);
         $reclamationC->ajoutReclamation($reclamation);
           header('Location:index.php');
          echo '<script>  alert("succes") </script>';}}
           
          
        
         else 
         {
                  $error =" Missing information";
         } 
    }
$produitC = new produitC();
$listeProduit= $produitC->afficherProduit();
$localC1= new localC();
$categorieC= new categorieC();
$listeCategorie= $categorieC->afficherCategorie();
$listeCategorie1= $categorieC->afficherCategorie();
$localC = new localC();
$listeLocal= $localC->afficherLocal();

$chefC = new chefC();
$listeChef= $chefC->afficherChef();

$fournisseurC = new fournisseurC();
$listeFournisseur= $fournisseurC->afficherFournisseur();  

$categorieChefC = new categorieChefC();
$error="";
$evenementC = new evenementC();
 $listeEvenement= $evenementC->afficherevenement();
 $reservation = null;
 $reservationC = new  reservationC(); 
 $reservation1C = new reservationC();
 $reservation2C = new reservationC();
$listeclient= $reservation1C->listeclient();
 $reservation2C = new reservationC();
 $listeLocalM= $localC->afficherLocal();
$listeLocal= $reservation2C->listeLocal();

if(
  isset($_POST['date']) 
 && isset($_POST['nb_perso']) 
 && isset($_POST['message'])
  && isset($_POST['local'])) 
  {
      if(
      !empty($_POST['date']) &&
      !empty($_POST['nb_perso']) &&
      !empty($_POST['message']) &&
    
      !empty($_POST['local']))
         {  if(!isset($_SESSION['idc'])){   header('Location:connexion.php'); } 
    
         else{
         $reservation= new reservation($_POST['date'],$_POST['nb_perso'],$_POST['message'] ,0, $_SESSION['idc'],$_POST['local']);
         $reservationC->ajouterreservation($reservation);
         echo '<script> alert("ajout avec succées en attente la confirmation de resto"); </script>';}
       
     }
     else 
     {    
     echo '<script> alert("des informations manquantes"); </script>';
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
 

  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 

      <!-- Top slider -->
      <div class="mu-top-slider">

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/1.jpg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Bienvenue</span>
            <h2 class="mu-slider-title">Chez Rey Del México</h2>
            <p>Le fast-food est réinventé dans la restauration rapide. Des ingrédients frais, une cuisson réelle,
                une préparation en direct ultra-rapide et
                une consommation de calories et de
                portefeuille facile .</p>           
            <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">Réserver une table</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    

         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/2.jpg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">L'authentique</span>
            <h2 class="mu-slider-title">Restaurant Méxicain</h2>
            <p>Nous ne servons qu'une seule cuisine. <br> #CaliforniaMexican.</p>           
           <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">Réserver une table</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/3.jpg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Le sain</span>
            <h2 class="mu-slider-title">Start with why</h2>
            <p>Vous pouvez manger notre nourriture sans vous sentir coupable. <br> #CheatWithoutCheating.</p>           
            <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">Réserver une table</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->   

      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">

            <div class="mu-title">
              <span class="mu-subtitle">Découvrir</span>
              <br>
              <h2>A PROPOS DE NOUS</h2>
              <br>
            </div>

            <div class="row">
              <div class="col-md-6">
               <div class="mu-about-us-left">     
                <img src="assets/img/about-us.jpg" alt="img">           
                </div>
              </div>
              <div class="col-md-6">
                <h1 class="mu-slider-title">#FASTCASUALINDIA</h1>
                
                 <div class="mu-about-us-right">
                   <br>
                   <br>
                 <p>Chez Rey Del México, nous avons pris l'engagement rapide et décontracté <br>
                    - nous vous servirons des plats frais et préparés en moins de 2 minutes.<br>
                    Et nous le ferons avec un menu très ciblé, servant une cuisine  <span>- Mexicaine californienne.</span></p>  
                                    
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->
 <!-- Start Counter Fournisseur -->


  <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">

            <div class="mu-title">
              <span class="mu-subtitle">NOS FOURNISSEURS </span>
              <br>
              <br><h2>THE BEST OF THE BEST</h2>
            </div>

            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
               
              <?PHP
foreach($listeFournisseur as $fournisseur){
?>
 <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/fournisseur/<?php echo $fournisseur["img"]; ?>" length="80" height="210" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4></i><?PHP echo $fournisseur['nom']; echo " "; echo $fournisseur['prenom']; ?></h4>

                      <?PHP $elementL= $localC->afficherElementLocal($fournisseur['local']);  ?>
                      <?PHP $elementC= $categorieC->afficherElementCategorie($fournisseur['categorie']);  ?>
    
                      <span></i><?PHP    echo $elementL->adresse; ?></span><br>
                      <span></i><?PHP    echo $elementC->libelle; ?></span>
                    </div>
                    <div class="mu-single-chef-social">
                     
                      <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                      <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                      <a href="https://www.linkedin.com/login/fr"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
 


<?PHP
}
?>
               
      
                 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

  <!-- End Fournisseur -->
  <!-- Start Counter Section -->
  <section id="mu-counter">
    <div class="mu-counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-counter-area">

              <ul class="mu-counter-nav">

                <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Frais</span>
                    <h3><span class="counter-value" data-count="150">0</span><sup>+</sup></h3>
                    <p>Garniture</p>
                  </div>
                </li>

                <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Delicieux</span>
                    <h3><span class="counter-value" data-count="60">0</span><sup>+</sup></h3>
                    <p>Fast-Food</p>
                  </div>
                </li>

                 <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Proximité</span>
                     <h3><span class="counter-value" data-count="4">0</span><sup>+</sup></h3>
                    <p>Locaux</p>
                  </div>
                </li>

                 <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Satisfés</span>
                    <h3><span class="counter-value" data-count="6560">0</span><sup>+</sup></h3>
                    <p>Clients</p>
                  </div>
                </li>

              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section --> 

  <!-- Start Restaurant Menu -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">

            <div class="mu-title">
              <span class="mu-subtitle">Notre Menu</span>
              <h2>Goûter à nos délices</h2>
            </div>

            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
               
              <?PHP
foreach($listeProduit as $produit){
?>
<li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/menu/<?php echo $produit["img"]; ?>" length="80" height="180" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                    <h4></i><?PHP 
                    $cat=$categorieC->afficherElementCategorie($produit['categorie']);
                    echo  $cat->libelle;
                    ?> </h4>
                      <h4></i><?PHP echo $produit['libelle'];?> </h4>
                       <h4></i><?PHP echo $produit['prix']; ?> Dt </h4>
                    </div>
                    <div class="mu-single-chef-social">
                    <h5></i><?PHP echo $produit['description']; ?></h5>
                    </div>
                   
                  </div>
                </li>
 


<?PHP
}
?>
   
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->
  <!-- End Restaurant Menu -->

  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">

            <div class="mu-title">
              <span class="mu-subtitle">Faites </span>
              <h2>Une réservation</h2>
            </div>

            <div class="mu-reservation-content">
              <p>Profitez de l'atmosphère chaleureuse chez Rey Del México</p>

              <div class="col-md-6">
                <div class="mu-reservation-left">
                <div  id="erreur"> </div>
                                 
                               
                        
                        <hr>
                        <br>
                       
                       <div id="error">
                           <?php echo $error; ?>
                       </div>
                                        
                       <form action="" name="reserervation" id="reserervation" method="POST" onclick= " return verifReservation()" >
                  <table  align="center">
               
               
                <tr>
                    <td><input type="date" name="date" id="date" maxlength="20" placeholder="Date"></td>
                </tr>
                 <br>
                 
                
                
               
                <tr>
                    <td><input type="text" name="nb_perso" id="nb_perso" maxlength="20" placeholder="Votre nombre"></td> 
                </tr>
                
                
                <tr>
                    <td> <textarea name="message" id="message" cols="30" rows="10" placeholder="message" ></textarea> </td> 
                </tr>
              
      
              
             
                <tr>
                    <td>
                    <select name="local" id="local">
                     <option value="select" selected>LOCAL</option>
                        
          <?php
          foreach($listeLocalM as $localC){
           ?>
           <option value ='<?PHP echo $localC['id_local']; ?>'> <?PHP echo $localC['adresse']; ?></option>
           <?php
          }
          ?>
          </select>   
                     
                    </td> 
                </tr>
                
               
                <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <tr></tr>
                                <tr> <td> 
                                  <br>  
                                <button type="submit" class="mu-readmore-btn" value="Envoyer">Faites une réservation</button>
                                </tr></td>      
                                </div>
                                </div>
                                </div>
               
                          
                  </table>
        </form>                   
                            
                </div>
              </div>

              <div class="col-md-5 col-md-offset-1">
                <div class="mu-reservation-right">
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
  <!-- End Reservation section -->

  <!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">

            <div class="mu-title">
              <span class="mu-subtitle">Décourvrir</span>
              <h2>Notre gallerie</h2>
            </div>

            <div class="mu-gallery-content">
            
              <!-- Start gallery image -->
              <div class="mu-gallery-body">
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
	                    <figure class="mu-single-gallery-img">
	                      <a class="mu-imglink" href="assets/img/gallery/1.jpg">
                          <img alt="img" src="assets/img/gallery/1.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
	                    </figure>            
                  	</div>
                </div>
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">
                  	 <div class="mu-single-gallery-item">
                        <figure class="mu-single-gallery-img">
                          <a class="mu-imglink" href="assets/img/gallery/2.jpg">
                            <img alt="img" src="assets/img/gallery/2.jpg">
                             <div class="mu-single-gallery-info">
                                <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                            </div> 
                          </a>
                        </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	 <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/3.jpg">
                          <img alt="img" src="assets/img/gallery/3.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/4.jpg">
                          <img alt="img" src="assets/img/gallery/4.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/5.jpg">
                          <img alt="img" src="assets/img/gallery/5.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->  

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                   <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/6.jpg">
                          <img alt="img" src="assets/img/gallery/6.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/7.jpg">
                          <img alt="img" src="assets/img/gallery/7.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/8.jpg">
                          <img alt="img" src="assets/img/gallery/8.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/9.jpg">
                          <img alt="img" src="assets/img/gallery/9.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>
                <!-- End single gallery image -->  

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->
  
  <!-- Start Client Testimonial section -->
  <section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">

              <div class="mu-title">
                <span class="mu-subtitle">Témoignages</span>
                <h2>Ce que disent les clients</h2>
              </div>

              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <ul class="mu-testimonial-slider">
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                      
                        <p>Nous avons adoré l'expérience de restauration Rey del México  pour l'anniversaire de mon mari! La particularité était le service. Leur personnel était ponctuel, poli et professionnel. Ils se sont installés, servis et nettoyés parfaitement. Et comme d'habitude, la nourriture était fraîche et délicieuse. La meilleure partie était honnêtement à quel point c'était rentable et pratique. Nous n'avions qu'à fournir une table et des amis affamés. Ils ont créé le reste de la magie!</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Wafa Sraj</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Notre expérience avec la restauration Rey del México a été merveilleuse. Le goût et la qualité de la nourriture sont authentiques et le personnel amical et professionnel. Nous ne ferions pas une sourde oreille pour avoir appelé un rappel!
                        </p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Noura Hesin</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Nous avons eu une super expérience avec l'équipe de restauration Rey del México. Tous nos amis ont vraiment apprécié la nourriture et tout le processus, le service était transparent! Je recommanderais vivement leur service pour votre prochaine fête.
                        </p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Sahar Mohsen</p>                      
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->
  
  <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">

            <div class="mu-title">
              <span class="mu-subtitle">Nos Professionnels</span>
              <h2>MAITRES CHEFS</h2>
            </div>

            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
               
              <?PHP
foreach($listeChef as $chef){
?>
<li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/<?php echo $chef["img"]; ?>" length="100" height="180" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4></i><?PHP echo $chef['nom']; echo " "; echo $chef['prenom']; ?></h4>
                      <span></i><?PHP  $elementL= $categorieChefC->afficherElementCategorieChef($chef['categorie']);
                      echo $elementL->libelle; ?></span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="<?PHP echo $chef['fb']; ?>"><i class="fa fa-facebook"></i></a>
                      <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                      <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                      <a href="https://www.linkedin.com/login/fr"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
 


<?PHP
}
?>
   
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

<!-- Start EVENEMEY -->
<!-- Start EVENEMEY -->
<section id="mu-evenement">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-about-us-area">

          <div class="mu-title">
            <span class="mu-subtitle">Découvrir</span>
            <br>
            <h2>Nos événements</h2>
            <br>
          </div>
          <?PHP

foreach($listeEvenement as $evenement){
  ?>
          <div class="row">
            <div class="col-md-6">
             <div class="mu-about-us-left">     
              <img src="../front/assets/img/event/<?php echo $evenement['img']; ?>"  alt="image produit " width="600" height="443">           
              </div>
            </div>
            <div class="col-md-6">
              <h1 class="mu-slider-title text-center"><?PHP echo $evenement['libelle']; ?></h1>
              
               <div class="mu-about-us-right text-center">
                 <br>
                 <br>
                 <?PHP  $elementC= $localC1->afficherElementlocal($evenement['local']); ?>
   
               <p> <?PHP echo $evenement['description']; ?>
               <br> 
               <?PHP  echo $elementC->adresse; ?>  
               <br>
               <?PHP  echo $evenement['date']; ?> 
              

               <br>
               </p> <h2><span>-Mexicaine californienne.</span></h2>                               
                
              </div>
            </div>
            </div>
      
            <?PHP
}
?>
           </div>
      </div>
    </div>
  </div>
</section>
<!-- End EVENEMENT -->
<!-- End EVENEMENT -->
 

  <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle">
                En cas de réclamation</span>
              <h2>Contacter nous</h2>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <!-- Email message div -->
                    <!-- Start contact form -->
                    <form action="" name="reclamation" id="reclamation" method="POST"  >
                  <table  align="center">
                  <tr>
                    <td> <label for="sujet">Sujet:</label> </td> 
                </tr>
                <tr>
                    <td><input type="text" name="sujet" id="sujet" maxlength="200" placeholder="Sujet"></td>
                </tr>
                 <br>                
                 <tr>
                    <td> <label for="msg">Message:</label> </td> 
                </tr>
                <tr>
                    <td> <textarea name="msg" id="msg" cols="30" rows="10" placeholder="message" ></textarea> </td> 
                </tr>
                <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <tr></tr>
                                <tr> <td> 
                                  <br>  
                                <button type="submit" class="mu-readmore-btn" value="Envoyer">Envoyer</button>
                                </tr></td>      
                                </div>
                                </div>
                                </div>     
                  </table>
        </form>       
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3> Adresses</h3>
                      <address>
                      <?PHP
foreach($listeLocal as $local){
?>
 <p><i class="fa fa-map-marker"></i><?PHP echo $local['adresse']; ?></p>
 <p><i class="fa fa-phone"></i><?PHP echo $local['tel']; ?></p>


<?PHP
}
?>
                        <p><i class="fa fa-envelope-o"></i>rey.delmexico@gmail.com</p>
                      
                       
                      
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Horaire de travail</h3>                      
                      <address>
                        <p><span>Lundi - Mardi</span>9.00 am to 4.00 pm</p>
                        <p><span>Mercredi - Jeudi</span>9.00 am to 12 pm</p>
                        <p><span>Vendredi - Samedi</span>9.00 am to 12 pm</p>
                        <p><span>Dimanche</span>9.00 am to 11 pm</p>
                      </address>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6422.452706209303!2d10.562925132189296!3d36.40371848003221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd61aed04a99b7%3A0x7fc8ae5cc02f7d02!2srey%20del%20m%C3%A9xico!5e0!3m2!1sfr!2stn!4v1618316744843!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  <!-- End Map section -->

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

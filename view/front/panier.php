<?php
session_start();
include "../../controller/panierC.php";
include "../../controller/localC.php";




 $panierC=new panierC();
  $panierC1=new panierC();
 
    $listpanier=$panierC->afficherpanier();
    $list = $panierC1->calculerpanier($idpanier);
    $localC = new localC();
    $listeLocal= $localC->afficherLocal();
     $N=0;
     $a=0;
    
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
 


  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <br><br><br>
              <span class="mu-subtitle">Découvrir</span>
              
              <h2 class="title-1 m-b-25">PANIER</h2>
              <h3 class="section-subheading text-muted"> <?php  if ($N==0) echo "Votre Panier est Vide !"?></h3>
                    <?php    if ($N>0) { ?>     <h2 class="section-heading text-uppercase" style="position: relative;right: 450px;">ARTICLE(<?php  echo $N; ?>)</h2>   <?php    } ?> 
                </div>

                <div class="row text-center">
                  <a href="afficherlignecommande.php">
                <button class="btn btn-info">Ligne  Commande</button>  </a>
                    <?php 
                       if ($N>0) {
                           
                       

                    ?>
               <table class="table">
                <thead class="thead-dark">
                          <tr>
                              
                              <th class="text-center">Image de produits</th>
                              <th class="text-center">Nom produit</th>
                              
                              <th class="text-center">Prix</th>
                              <th class="text-center">Quantite</th>
                          
                              <th class="text-center">Total</th>
                              <th class="text-center">Suppression</th>

                              
                             
                              <th class="text-center"></th>
                              <th class="text-right"></th>
                          </tr>
                          </thead>
                        <tbody>

            
 
 



<?php
$C='';
$S=0;
$S1=0;




foreach ($listpanier as $row)
{
    
        
        $S=(intval($row["prix"])*intval($row["qte"]));
        $S1=$S1+(intval($row["prix"])*intval($row["qte"]));
      
        $C=$C.$row["qte"].'x'.' '.$row["nomproduit"].'</br>';
 ?>
                <tbody>
                  <tr valign="middle">
            
               <td valign="middle"><center><img width="200px" src="assets/img/menu/<?php echo $row['imgproduit'];?>" /></center></td>
        <th><center><h5 style="position: relative;top: 50px"><?php echo $row['nomproduit'];?></h5></center></th>
       

            <td style="margin: auto"><center><h5 style="position: relative;top: 50px"><?php echo $row["prix"].' '.'TND' ?></h5></center></td>
           
       
          
            <td align="center">
             <center>  <form action="modifierpanier.php" method="post" style="position: relative;top: 10px">
                   
             <input type="hidden" id="idpanier" name="idpanier" value="<?php echo $row["idpanier"] ?>">
             <br>
                   <select name="qte" id="qte" >
                   
    <option value="1"   <?php if ($row["qte"]==1) echo "selected" ; ?>>1</option>
       <option value="2"  <?php if ($row["qte"]==2) echo "selected" ; ?>>2</option>
       <option value="3"  <?php if ($row["qte"]==3) echo "selected" ; ?>>3</option>
       <option value="4"  <?php if ($row["qte"]==4) echo "selected" ; ?>>4</option>
       <option value="5"  <?php if ($row["qte"]==5) echo "selected" ; ?>>5</option>
       <option value="6"  <?php if ($row["qte"]==6) echo "selected" ; ?>>6</option>
       <option value="7"  <?php if ($row["qte"]==7) echo "selected" ; ?>>7</option>
       
    </select>
    <center>  <button type="submit" class="badge badge-info">update</button>
               </form></center>
           </td>
           
  
            
            <td><center><h5 style="position: relative;top: 50px"><?php echo $S.' '.'TND' ; ?></h5></center></td>
              <td align="center">
              <center >  <form action="supprimerpanier.php" method="get" style="position: relative;top: 50px">
                   
                    <input type="hidden" id="idpanier" name="idpanier" value="<?php echo $row["idpanier"] ?>">
                   <input type="hidden" id="id" name="id" value="<?php echo  $row["client"] ?>">
                    <button  class="btn btn-danger" type="submit" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </form></center>
            </td>
         
            
        </tr>   
        
              <center>  <form action="confirmerpanier.php" method="post" style="position: relative;top: 50px">
                    
        
       </select>
                    
                </form></center>
            



                </tbody>
                   

                <?php
} ?>
               </table>

               <form action="localLiv.php" method="post" style="position: relative;top: 10px">
               <input type="hidden" id="panier" name="panier" value="<?php echo $row["idpanier"] ?>">
             
               <label for="local">Local:</label>
            
            <select name="local" id="local"  required >
                     
  <?php 
  
  foreach($listeLocal as $localC){
   ?>
   <option value ='<?PHP echo $localC['id_local']; ?>' <?php if ($row["local"]==$localC['id_local']) echo "selected" ; ?>> 
   <?PHP echo $localC['adresse']; ?>
  </option>
   <?php
  }
  ?>
  </select>   
 
          <center>  <button type="submit" class="badge badge-info">update</button>
                     </form></center>
             
                 
        
               <table>
               
                   <tr>
         
                   <center><h3 ><?php echo 'Total:'.'    '.'  '. $S1.' '.'TND' ?>
                  <br> </h3>
        </tr>
 <tr>
<form action="ajoutercommande.php"  action="supprimertout.php" method="post">
                    
                    <input type="hidden" id="id_commande" name="id_commande" value=" ">
                    <input type="hidden" id="nomproduit" name="nomproduit" value="<?php echo  $row["nomproduit"] ?> ">
                    <input type="hidden" id="prix_tot" name="prix_tot" value="<?php echo $S1 ?>">
                    <input type="hidden" id="qte" name="qte" value=" <?php echo  $row["qte"] ?>">
              
          <input type="hidden" id="client" name="client" value="<?php echo  $row["client"] ?> ">
          
                    <input type="hidden" id="etat" name="etat" value="en cours de traitement">
                  
                    <button class="btn btn-info">PASSER COMMANDE</button>
                </form></center>
                
</tr>
<br> <br>
<tr>
<form action="ajouterlivraison.php"  action="supprimertout.php" method="post">
                    
                   
<input type="hidden" id="id" name="id" value=" ">
                    <input type="hidden" id="frais_livraison" name="frais_livraison" value="<?php echo $S1 ?>">
              
                   
                    <input type="hidden" id="local" name="local" value="<?php echo  $row["local"] ?> ">

                   
          <input type="hidden" id="client" name="client" value="<?php echo  $row["client"] ?> ">
          
                    <input type="hidden" id="etat" name="etat" value="en cours de traitement">
                 
                  
                    <button id="livraison"  class="btn btn-info">PASSER LIVRAISON</button>
                </form></center>
                
</tr>
            </table>
            <?php } 
           

           ?>
          
            
               
             <div>
                 <div>
                
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>


               
                                <!-- END PAGE CONTAINER-->
                        
  
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
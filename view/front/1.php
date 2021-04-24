<?PHP

	include "../../controller/localC.php";
	$localC = new localC();
	$listeLocal= $localC->afficherLocal();

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
          <a class="navbar-brand" href="1.html">Rey Del<br>Méx<span>I</span>co</a> 

		      <!--  Image based logo  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
          <li><a href="1.php">ACCUEIL</a></li>
            <li><a href="1.php#mu-about-us">A PROPOS DE NOUS</a></li>                       
            <li><a href="1.php#mu-restaurant-menu">MENU</a></li>                       
            <li><a href="1.php#mu-reservation">RESERVATION</a></li>           
            <li><a href="1.php#mu-gallery">GALLERY</a></li>
            <li><a href="1.php#mu-chef">NOS CHEFS</a></li> 
            <li><a href="1.php#mu-evenement">EVENEMENT</a></li> 
            <li><a href="ethos.html">ETHOS</a></li>  
            <li><a href="commander.php">COMMANDER</a></li>  
          </ul>  
          <a href="panier.php"> <img class="right1" src="assets/img/panier.png" width="25" height="25" alt="tab img"></a> 
          <a href="connexion.php"> <img class="rightT1" src="assets/login.jpg" width="25" height="25" alt="tab img"></a>                
               
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
                    - nous vous servirons des plats frais <br>
                    et préparés en moins de 2 minutes.<br>
                    Et nous le ferons avec un menu très ciblé,<br>
                    servant une cuisine</p> <h2><span>-Mexicaine californienne.</span></h2>                               
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

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
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <span class="mu-subtitle">Découvrir</span>
              <h2>NOTRE MENU</h2>
            </div>
            
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li class="active"><a href="#tacos" data-toggle="tab">Tacos</a></li>
                <li><a href="#burrito" data-toggle="tab">Burrito</a></li>
                <li><a href="#cali" data-toggle="tab">Cali Quasdilla</a></li>
                <li><a href="#accompagnements" data-toggle="tab">Accompagnements</a></li>
                <li><a href="#dessert" data-toggle="tab">Desserts</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="tacos">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/1.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Al pastor</a></h4>
                                  <span class="mu-menu-price">11.000  dt</span>
                                  <p>Chawarma. Il est le plus souvent accompagné d'ananas, d'oignon et de coriandre.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/2.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Al biria</a></h4>
                                  <span class="mu-menu-price">11.500 dt</span>
                                  <p>La viande de birria est cuite lentement dans le bouillon, ce qui la rend toujours moelleuse et tendre.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/3.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Barbaco</a></h4>
                                  <span class="mu-menu-price">12.500 dt</span>
                                  <p> Avec de la viande de chèvre ou de mouton.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/4.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Carnitas</a></h4>
                                  <span class="mu-menu-price">13.500 dt</span>
                                  <p>Ce taco est composé d'épaule de porc râpée et un certain nombre d'herbes et d'épices différentes</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Lengua Taco</a></h4>
                                  <span class="mu-menu-price">11.950  dt </span>
                                  <p>La viande de langue de bœuf est généralement cuite lentement, ce qui donne une texture très douce et lisse.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/6.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Tinga</a></h4>
                                  <span class="mu-menu-price">14.500 dt</span>
                                  <p> Les piments chipotle fumés sont au cœur de la délicieuse saveur des tacos au poulet tinga.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="burrito">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/7.png" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#"> Breakfast</a></h4>
                                  <span class="mu-menu-price">16.500 dt</span>
                                  <p>Le burrito se compose une tortilla farcie d'ingrédients tels que des œufs, du bacon et des pommes de terre.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/8.png" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">California</a></h4>
                                  <span class="mu-menu-price">11.500 dt</span>
                                  <p>Le burrito se compose généralement d'une tortilla de farine farcie de carne asada, de grandes quantités de fromage, de frites, de crème sure et de guacamole.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/9.png" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Carne asada</a></h4>
                                  <span class="mu-menu-price">16.500 dt</span>
                                  <p> Le plat se compose d'une grande tortilla de farine garnie de viande de carne asada, de pico de gallo et de guacamole.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/10.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Mission</a></h4>
                                  <span class="mu-menu-price">15.900 dt</span>
                                  <p> Le burrito est assez gros et consiste en une tortilla cuite à la vapeur, rempli de haricots au lard, de riz et de laitue râpée.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/11.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">SpicyBeef</a></h4>
                                  <span class="mu-menu-price">11.950 dt</span>
                                  <p>Ce taco combine des haricots frits et du bœuf haché assaisonné avec des poivrons frais.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/12.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Wet</a></h4>
                                  <span class="mu-menu-price">14.500 dt</span>
                                  <p> Le burrito humide est recouvert de sauce au chili rouge et de tas de fromage fondu. Il peut être rempli du bœuf râpé aux haricots et au riz.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="cali">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/13.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Borocli</a></h4>
                                  <span class="mu-menu-price">15.500 dt</span>
                                  <p>Le brocoli et l'ail sautés, le fromage cheddar fort, l'avocat écrasé et l'aneth frais en font une quesadilla moyenne.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/14.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Caprese</a></h4>
                                  <span class="mu-menu-price">12.500 dt</span>
                                  <p> Un déjeuner délicieux et facile qui se prépare rapidement et ne contient que cinq ingrédients!</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/15.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Greek</a></h4>
                                  <span class="mu-menu-price">16.500 dt</span>
                                  <p>Grecque-mex plus légère, servie avec un côté traditionnel de sauce tzatziki fraîche et acidulée</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/16.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Guacamole</a></h4>
                                  <span class="mu-menu-price">13.500 dt</span>
                                  <p>Les tièdes de la poêle, fraîchement grillés et suintants avec du guacamole chaud emballé à l'avocat.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/17.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Potato</a></h4>
                                  <span class="mu-menu-price">11.500 dt</span>
                                  <p>Les patates douces sont cuites dans un mélange de chipotles, de jus de citron vert et de miel, ce qui en fait la combinaison épicée.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/18.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Tomato Quesadilla</a></h4>
                                  <span class="mu-menu-price">13.500 dt</span>
                                  <p>Quesadillas aux épinards et aux tomates. Il regorge de vitamines K et A, B2 et B6, C, de calcium et de potassium.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="accompagnements">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/19.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chilly Frites</a></h4>
                                  <span class="mu-menu-price">6.000 dt</span>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/20.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Curved Frites</a></h4>
                                  <span class="mu-menu-price">9.000 dt</span>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/21.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Hard Bard</a></h4>
                                  <span class="mu-menu-price">5.000 dt</span>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/22.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Ohoboho</a></h4>
                                  <span class="mu-menu-price">6.000 dt</span>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/23.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Poutine</a></h4>
                                  <span class="mu-menu-price">9.000 dt</span>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/24.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Saucy</a></h4>
                                  <span class="mu-menu-price">8.500 dt</span>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="dessert">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/25.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Flan</a></h4>
                                  <span class="mu-menu-price">8.500 dt</span>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/26.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Churros</a></h4>
                                  <span class="mu-menu-price">7.500 dt</span>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/27.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Orangina</a></h4>
                                  <span class="mu-menu-price">4.500 dt</span>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/28.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chocolata</a></h4>
                                  <span class="mu-menu-price">6.500 dt</span>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/29.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Don taco</a></h4>
                                  <span class="mu-menu-price">9.500 dt</span>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/30.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Peki</a></h4>
                                  <span class="mu-menu-price">8.500 dt</span>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
                  <form class="mu-reservation-form">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">                       
                          <input type="text" class="form-control" placeholder="Nom et Prénom">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="text" class="form-control" placeholder="Numéro téléphone">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <select class="form-control">
                            <option value="0">Combien de?</option>
                            <option value="1 Person">1 Personne</option>
                            <option value="2 People">2 Personnes</option>
                            <option value="3 People">3 Personnes</option>
                            <option value="4 People">4 Personnes</option>
                            <option value="5 People">5 Personnes</option>
                            <option value="6 People">6 Personnes</option>
                            <option value="7 People">7 Personnes</option>
                            <option value="8 People">8 Personnes</option>
                            <option value="9 People">9 Personnes</option>
                            <option value="10 People">10 Personnes</option>
                          </select>                      
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" id="datepicker" placeholder="Date">              
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" cols="30" rows="10" placeholder="Votre message"></textarea>
                        </div>
                      </div>
                      <button type="submit" class="mu-readmore-btn">Faites une réservation</button>
                    </div>
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
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/4.png" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Ahmed Bahrouni</h4>
                      <span>Chef de cuisine</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="https://www.facebook.com/ahmed.bahrouni.96"><i class="fa fa-facebook"></i></a>
                      <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                      <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                      <a href="https://www.linkedin.com/login/fr"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/3.png" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Achref Bouselama</h4>
                      <span>Chef de Tacos</span>
                    </div>
                    <div class="mu-single-chef-social">
                        <a href="https://www.facebook.com/profile.php?id=100004907642469"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.linkedin.com/login/fr"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/2.png" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Abdelkader Daghrour</h4>
                      <span>Chef de Burrito</span>
                    </div>
                    <div class="mu-single-chef-social">
                        <a href="https://www.facebook.com/profile.php?id=100008911682926"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.linkedin.com/login/fr"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/1.png" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Myriam Ddaghrour</h4>
                      <span>Chef de Cali Quasdilla</span>
                    </div>
                    <div class="mu-single-chef-social">
                        <a href="https://www.facebook.com/myriam.daghrour.9/"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.linkedin.com/login/fr"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>  

                <li>
                    <div class="mu-single-chef">
                      <figure class="mu-single-chef-img">
                        <img src="assets/img/chef/4.png" alt="chef img">
                      </figure>
                      <div class="mu-single-chef-info">
                        <h4>Ahmed Bahrouni</h4>
                        <span>Chef de cuisine</span>
                      </div>
                      <div class="mu-single-chef-social">
                        <a href="https://www.facebook.com/ahmed.bahrouni.96"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.linkedin.com/login/fr"><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </li>
  
                  <li>
                    <div class="mu-single-chef">
                      <figure class="mu-single-chef-img">
                        <img src="assets/img/chef/3.png" alt="chef img">
                      </figure>
                      <div class="mu-single-chef-info">
                        <h4>Achref Bouselama</h4>
                        <span>Chef de Tacos</span>
                      </div>
                      <div class="mu-single-chef-social">
                          <a href="https://www.facebook.com/profile.php?id=100004907642469"><i class="fa fa-facebook"></i></a>
                          <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                          <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                          <a href="https://www.linkedin.com/login/fr"><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="mu-single-chef">
                      <figure class="mu-single-chef-img">
                        <img src="assets/img/chef/2.png" alt="chef img">
                      </figure>
                      <div class="mu-single-chef-info">
                        <h4>Abdelkader Daghrour</h4>
                        <span>Chef de Burrito</span>
                      </div>
                      <div class="mu-single-chef-social">
                          <a href="https://www.facebook.com/profile.php?id=100008911682926"><i class="fa fa-facebook"></i></a>
                          <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                          <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                          <a href="https://www.linkedin.com/login/fr"><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </li>
  
                  <li>
                    <div class="mu-single-chef">
                      <figure class="mu-single-chef-img">
                        <img src="assets/img/chef/1.png" alt="chef img">
                      </figure>
                      <div class="mu-single-chef-info">
                        <h4>Myriam Daghrour</h4>
                        <span>Chef de Cali Quasdilla</span>
                      </div>
                      <div class="mu-single-chef-social">
                          <a href="https://www.facebook.com/myriam.daghrour.9/"><i class="fa fa-facebook"></i></a>
                          <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                          <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                          <a href="https://www.linkedin.com/login/fr"><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </li>             
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

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

          <div class="row">
            <div class="col-md-6">
             <div class="mu-about-us-left">     
              <img src="assets/fonds.png" alt="img" width="600" height="443">           
              </div>
            </div>
            <div class="col-md-6">
              <h1 class="mu-slider-title text-center">Un événement destiné à collecter des fonds</h1>
              
               <div class="mu-about-us-right text-center">
                 <br>
                 <br>
               <p>Chez Rey Del México, <br>Le but principal de cet événement <br>
                est d'aider les enfants atteints du cancer.<br>
                 Pour ce faire, nous faisons appel à votre générosité.
                 <br> Soyez le bienvenue le 17/08/2021.</p> <h2><span>-Mexicaine californienne.</span></h2>                               
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
                    <div id="form-messages"></div>
                    <!-- Start contact form -->
                    <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                      <div class="form-group">
                        <label for="name">Nom et Prénom</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom et Prénom" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                      </div>                      
                      <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>                        
                        <textarea class="form-control" id="message" name="message"  cols="30" rows="10" placeholder="Votre message" required></textarea>
                      </div>                      
                      <button type="submit" class="mu-send-btn">Envoyer le message</button>
                    </form>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3> Adresses</h3>
                      <address>
                        <p><i class="fa fa-phone"></i> +216 54 125 469</p>
                        <p><i class="fa fa-phone"></i> +216 52 589 661</p>
                        <p><i class="fa fa-envelope-o"></i>rey.delmexico@gmail.com</p>
                        <?PHP
foreach($listeLocal as $local){
?>
 <p><i class="fa fa-map-marker"></i><?PHP echo $local['adresse']; ?></p>


<?PHP
}
?>
                       
                      
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

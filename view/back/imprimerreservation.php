<?php

include "../../controller/localC.php";


$localC = new localC();



?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>reservation</title>

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
    <script src="js/reservation.js"></script>

  </head>
<body onload="window.print()">

    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
       
          <a class="navbar-brand" href="http://localhost/77/view/front/1.php">Rey Del<br>Méx<span>I</span>co</a> 

		  

        </div></br>
</br>
<h2 style="font-size: 25px">le client numèro: <?php echo $_GET['client'] ;?></h5>
<h2 style="font-size: 25px">nb des personnes : <?php echo $_GET['nb_perso'] ;?></h5>
<h2 style="font-size: 25px">Message: <?php echo $_GET['message'] ;?></h5>
<h2 style="font-size: 25px">Le : <?php echo $_GET['date'] ;?></h5>

<?PHP 
   $elementC= $localC->afficherElementlocal($_GET['local']);?>
   
   <h2 style="font-size: 25px">Local : <?php echo $elementC->adresse; ;?></h2>
</div>
</nav>
</body>
</html>

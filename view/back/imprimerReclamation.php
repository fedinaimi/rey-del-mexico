<?php

include "../../controller/reclamationC.php";
include "../../controller/clientC.php";

$reclamationC = new reclamationC();
$clientC = new clientC();


?>
<html>
<head>
    

  </head>
  
<body onload="window.print()">

<a class="logo" href="showReclamation.php">
                            <img src="logo.jpg" alt="logo" />
                        </a>
                        <?PHP 
   $elementC= $clientC->afficherElementClient($_GET['client']);?>
   
   <h2 style="font-size: 25px">Client : <?php echo $elementC->nom;?></h2>
<h2 style="font-size: 25px">message : <?php echo $_GET['message'] ;?></h5>
<h2 style="font-size: 25px">subject: <?php echo $_GET['sujet'] ;?></h5>



</div>
</nav>
</body>
</html>
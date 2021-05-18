<?php

include "../../controller/localC.php";


$localC = new localC();



?>
<html>
<body onload="window.print()">
<a class="logo" href="showEvenement.php">
                            <img src="logo.jpg" alt="logo" />
                        </a>
</br>
</br>
<h1 style="font-size: 50px">Libelle : <?php echo $_GET['libelle'] ;?></h1>
<h2 style="font-size: 25px">Date: <?php echo $_GET['date'] ;?></h5>
<h2 style="font-size: 25px">Duree: <?php echo $_GET['duree'] ;?>min</h5>
<h2 style="font-size: 25px">Description <?php echo $_GET['description'] ;?></h5>
<?PHP 
   $elementC= $localC->afficherElementlocal($_GET['local']);?>
   
   <h2 style="font-size: 25px">Local : <?php echo $elementC->adresse; ;?></h5>

<td><img src="../front/assets/img/event/<?php echo $_GET['img']; ?>" length="200" height="200"  alt="image produit "/></td>


</body>
</html>

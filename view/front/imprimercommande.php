<?php
include "../../controller/commandeC.php";


$id_commande=$_POST["id_commande"];
$etat=$_POST["etat"];


$commandeC=new commandeC();
$commandeC->imprimercommande1();

?>

<html>
<body onload="window.print()">

</br>
</br>
<h1 style="font-size: 50px">Numero de commande : <?php echo $_GET['id_commande'] ;?></h1>
<h5 style="font-size: 25px">nombre de calories : <?php echo $_GET['nb_calories'] ;?></h5>
<h2 style="font-size: 40px">Les Articles :</h2>
<h3 style="font-size: 25px"><?php
echo $_GET['detail'];
?></h3>
<h2 style="font-size: 30px">Prix total : <?php echo $_GET['prix_tot'] ;?> TND</h2>



</body>
</html>

<?php
include "../../controller/commandeC.php";

?>
<html>

<a class="logo" href="commande.php">
        <img src="images/icon/logo.png" alt="Cool Admin">
        </a>
        
<body onload="window.print()">

</br>
</br>


<h1 style="font-size: 50px">Numero de commande : <?php echo $_GET['id_commande'];?></h1>
<h5 style="font-size: 50px">ID client <?php echo $_GET["client"];?></h5>
<h2 style="font-size: 50px">details de la commande:</h2>
<h5 style="font-size: 40px">nom produit <?php echo $_GET["nomproduit"] ;?></h5>
<h5 style="font-size: 40px">quantite <?php echo $_GET['qte'] ;?></h5>

<h2 style="font-size: 40px">Prix total : <?php echo $_GET['prix_tot'] ;?> TND</h2>
<center><h2 style="font-size: 100px">etat : <?php echo $_GET['etat'] ;?> </h2></center>

</body>
</html>

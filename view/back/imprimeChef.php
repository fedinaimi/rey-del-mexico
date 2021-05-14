<?php
 include "../../controller/categorieChefC.php";
 include "../../controller/localC.php";
 $categorieChefC = new categorieChefC();
 $localC = new localC();
?>

<html>
<body onload="window.print()">

</br>
</br>

                        <a class="logo" href="showChef.php">
                            <img src="logo.jpg" alt="logo" />
                        </a>
  <h1 style="font-size: 50px">Photo Personnele: 
  <br>
  <img src="../front/assets/img/chef/<?php echo $_GET['img']; ?>" length="100" height="100" alt="image Chef"/>
 </h1>                      
<h1 style="font-size: 50px">Nom: <?php echo $_GET['nom'] ;?></h1>
<h5 style="font-size: 25px">Prenom : <?php echo $_GET['prenom'] ;?></h5>
<h2 style="font-size: 40px">Email : <?php echo $_GET['email'];?></h2>
<h5 style="font-size: 25px">Date de Naissance : <?php echo $_GET['dateNais'] ;?></h5>
<h2 style="font-size: 40px">Adresse : <?php echo $_GET['adresse'];?></h2>
<h2 style="font-size: 40px">
<?php
$elementC= $categorieChefC->afficherElementCategorieChef( $_GET['categorie']);
?>
Catégorie : <?php  echo $elementC->libelle;
?>
</h2>
<h2 style="font-size: 40px">
<?php
$elementL= $localC->afficherElementLocal( $_GET['local']);
?>
Local : <?php  echo $elementL->adresse;
?></h2>




</body>
</html>
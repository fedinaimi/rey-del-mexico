
<html>
<body onload="window.print()">

</br>
</br>

                        <a class="logo" href="showFournisseur.php">
                            <img src="logo.jpg" alt="logo" />
                        </a>
                        
<h4 style="font-size: 30px">Image : 
<br>
<img src="../front/assets/img/fournisseur/<?php echo $_GET['img'] ;?>" length="250" height="250" alt="image fourni "/>

</h4>
<h4 style="font-size: 25px">Nom : <?php echo $_GET['nom'] ;?></h4>
<h4 style="font-size: 25px">Prenom : <?php echo $_GET['prenom'];?></h4>
<h4 style="font-size: 25px">Tel : <?php echo $_GET['tel'];?></h4>
<h4 style="font-size: 25px">Email: <?php echo $_GET['email'];?> </h4>




</body>
</html>

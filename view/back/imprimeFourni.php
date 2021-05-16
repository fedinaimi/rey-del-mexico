
<html>
<body onload="window.print()">

</br>
</br>

                        <a class="logo" href="showFournisseur.php">
                            <img src="logo.jpg" alt="logo" />
                        </a>
                        
<h1 style="font-size: 50px">Image : 
<br>
<img src="../front/assets/img/fournisseur/<?php echo $_GET['img'] ;?>" length="250" height="250" alt="image fourni "/>

</h1>
<h5 style="font-size: 25px">Nom : <?php echo $_GET['nom'] ;?></h5>
<h2 style="font-size: 40px">Prenom : <?php echo $_GET['prenom'];?></h2>
<h2 style="font-size: 40px">Tel : <?php echo $_GET['tel'];?></h2>
<h2 style="font-size: 25px">Email: <?php echo $_GET['email'];?> </h2>




</body>
</html>

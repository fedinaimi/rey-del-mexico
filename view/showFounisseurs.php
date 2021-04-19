<?PHP
	include "../controller/fournisseurC.php";

	$fournisseurC = new fournisseurC();
	$listefournissseur= $fournisseurC->afficherFournisseur();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste album </title>
    </head>
    <body>
		<button><a href="addalbum.php">Ajouter un album</a></button>
        <h1> <!--sous titre -->
                MUSIC
            </h1>
		
		<table>
			<tr></tr>

			<?PHP
				foreach($listealbum as $album){
			?>
				<tr>
                 
                <td> <h1>  album <?PHP echo $album['idAlbum']; ?></h1></td>

					
					<td><img src="../<?php echo $album["image"]; ?>" alt="image"/></td>
			</tr>
			<tr>
            
            <td><h5><?PHP echo $album['prix'];?>DT</h5></td>
            
            <td>     
                  <form method="POST" action="supprimeralbum.php">
                  <input type="submit" name="supprimer" value="supprimer">      
				  <input type="hidden" value=<?PHP echo $album['idAlbum']; ?> name="idAlbum">
				  </form>             
            </td>
					<td> <a href="modifieralbum.php?id=<?PHP echo $album['idAlbum']; ?>"> Modifier </a></td>
				</tr>
			<?PHP
				}
			?>
		</table>
		<br>
<br>
<hr>
<br>
<h1 style="color: rgb(7, 2, 36); text-align:center;"> CHERCHER UN ALBUM </h1>
<br>
<hr>
<br>
<form  action="showAlbums.php" method="POST" align="center">
    <label for="titre"> <h3 style="color: red;"> Veuillez saisir le titre de l'album cherché </h3> </label>
    <input type="text" name="titre"  maxlength="50">
    <br>
    <br>
    <br>
    <input type="submit" value="Submit" name="rechercher">
        
</form>

    <?php
        if(isset($_POST['titre'])) { //S'il y a eu une recherche en crée le tableau avec le résultat
            $titre=$_POST['titre'];
            $listealbum=$albumC->chercher($titre);
    ?>
        <table border="0" align="center">
            <tr> 
                <td align="center"> <h2 style="color: red;"> Id Album </h2> </td>
                <td align="center"> <h2 style="color: red;"> Titre </h2> </td>
                <td align="center"> <h2 style="color: red;"> Prix </h2> </td>
                <td align="center"> <h2 style="color: red;"> Image </h2> </td>
            </tr>
            <?php
                foreach($listealbum as $a1) {
            ?>
                <tr> 
                    <td align="center"> <h4 style="color: rgb(7, 2, 36); "> Album <?php echo $a1['idAlbum'] ?> </h4> </td>
                    <td align="center"> <h4 style="color: rgb(7, 2, 36); ">  <?php echo $a1['titre'] ?> </h4> </td>  
                    <td align="center"> <h4 style="color: rgb(7, 2, 36); "> <?php echo $a1['prix'] ?> dt </h4> </td>  
                    <td align="center"> <img src="<?php  echo $a1['image']?>" > </td>
                    </tr>
            <?php
            }
            ?> 
        </table>
    <?php
        }
    ?>
	</body>
</html>

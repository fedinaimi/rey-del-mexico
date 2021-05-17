<?PHP
   	include "../../controller/fournisseurC.php";
       include "../../controller/localC.php";
       include "../../controller/categorieC.php";
   
    $fournisseurC = new fournisseurC();
	$listeFournissseur= $fournisseurC->afficherFournisseur();
    $elementC= null;
    $elementL= null;
    $localC = new localC();
    $categorieC = new categorieC();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Afficher Liste des fournisseurs </title>
    </head>
    <a class="logo" href="showFournisseur.php">
                            <img src="logo.jpg" alt="logo" />
                        </a>
    <body onload="window.print()">

        <hr>
        <table border=2 align = 'center'>
            <tr>
            <th class="text-center">ID</th>
            <th class="text-center">IMG</th>
                                                <th class="text-center">NOM</th>
                                                <th class="text-center">Prénom</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Tel</th>
                                                <th class="text-center">Catégorie</th>
                                                <th class="text-center">Local</th>
                
            </tr>
<?php
            foreach($listeFournissseur as $fournisseur){
?>
<tr>
<td class="text-center"><?PHP echo $fournisseur['id_fournisseur']; ?></td>
<td><img src="../front/assets/img/fournisseur/<?php echo $fournisseur["img"]; ?>" length="40" height="40" alt="image fourni "/></td>

<td class="text-center"><?PHP echo $fournisseur['nom']; ?></td>
<td class="text-center"><?PHP echo $fournisseur['prenom']; ?></td>
<td class="text-center"><?PHP echo $fournisseur['email']; ?></td>
<td class="text-center"><?PHP echo $fournisseur['tel']; ?></td>
<td class="text-center">
    <?PHP 
   $elementC= $categorieC->afficherElementCategorie($fournisseur['categorie']);
   echo $elementC->libelle;
     ?>
</td>
<td class="text-center"> 
<?PHP
$elementL= $localC->afficherElementLocal($fournisseur['local']);
 echo $elementL->adresse;
?>
</td>

                    
                </tr>
            <?PHP
                }
            ?>
        </table>
    </body>
</html>

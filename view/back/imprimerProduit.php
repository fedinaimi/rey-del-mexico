<?PHP
    include "../../controller/produitC.php";
    require_once "../../config.php";
	$produitC = new produitC();
	$listepproduit=$produitC->afficherProduit();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<a class="logo" href="showProduit.php">
        <img src="images/icon/logo.png" alt="Cool Admin">
        </a>
		<title> Afficher Liste des Produits </title>
    </head>
    <body onload="window.print()">

		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>ID</th>
				<th>Image</th>
				<th>Libelle</th>
                <th>Nb Calories</th>
                <th>Prix</th>
                <th>Description</th>
                <th>Catégorie</th>
                <th>Fournisseur</th>
				
			</tr>

			<?PHP
				foreach ($listepproduit as $produit){
			?>
            		<tr>
                    <td><?PHP echo $produit['id']; ?></td>
					<td><?PHP echo $produit['img']; ?></td>
					<td><?PHP echo $produit['libelle']; ?></td>
                    <td><?PHP echo $produit['nb_calories']; ?></td>
                    <td><?PHP echo $produit['prix']; ?></td>
                    <td><?PHP echo $produit['description']; ?></td>
                    <td><?PHP echo $produit['categorie']; ?></td>
                    <td><?PHP echo $produit['fournisseur']; ?></td>
					
					
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
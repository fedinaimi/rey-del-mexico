<?PHP
    include "../../controller/commandeC.php";
    require_once "../../config.php";
	$commandeC = new commandeC();
	$listecommande=$commandeC->affichercommande();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <a class="logo" href="commande.php">
        <img src="images/icon/logo.png" alt="Cool Admin">
        </a>
        
		<title> Afficher la liste des Commandes </title>
    </head>
    <body onload="window.print()">

		<hr>
		<table border=1 align = 'center'>
			<tr>
                <th>client</th>
                <th>id commande</th>
				<th>etat</th>
                <th>nom du produit</th>
                <th>quantite</th>
                <th>prix total</th>
			
               
                
				
			</tr>

			<?PHP
				foreach ($listecommande as $commande){
			?>
            		<tr>
                    <td><?PHP echo $commande['client']; ?></td>
					<td><?PHP echo $commande['id_commande']; ?></td>
					<td><?PHP echo $commande['etat']; ?></td>
                    <td><?PHP echo $commande['nomproduit']; ?></td>
                    <td><?PHP echo $commande['qte']; ?></td>
                    <td><?PHP echo $commande['prix_tot']; ?></td>
              
					
					
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
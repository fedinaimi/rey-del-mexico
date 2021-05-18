<?PHP
include "../../controller/commandeC.php";
$commandeC=new commandeC();
if (isset($_GET["id_commande"])){
	$commandeC->supprimercommande($_GET["id_commande"]);
	header('Location:../back/commande.php');
}

?>
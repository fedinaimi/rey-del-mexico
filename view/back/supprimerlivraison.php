<?PHP
include "../../controller/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_GET["id"])){
	$livraisonC->supprimerlivraison($_GET["id"]);
	header('Location:showLivraison.php');
}

?>
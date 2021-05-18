<?PHP
include "../../controller/panierC.php";
$panierC=new panierC();
if (isset($_GET["idpanier"])){
	$panierC->supprimerpanier($_GET["idpanier"]);
	header('Location:panier.php');
}

?>
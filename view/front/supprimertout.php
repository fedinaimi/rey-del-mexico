<?PHP
include "../../controller/panierC.php";
$panierC=new panierC();
if (isset($_GET["client"])){
	$panierC->supprimertout($_GET["client"]);
	header('Location:panier.php');
}

?>
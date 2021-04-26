<?PHP
	
    include_once '../../controller/livraisonC.php';

	$livraisonC=new livraisonC();
	
	if (isset($_POST["id"])){
		$livraisonC->supprimerLivraison($_POST["id"]);
		header('Location:showLivraison.php');
	}

?>
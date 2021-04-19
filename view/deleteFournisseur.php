<?PHP
	include "../controller/fournisseurC.php";

	$fournisseurC=new fournisseurC();
	
	if (isset($_POST["id_fournisseur"])){
		$fournisseurC->supprimerFournisseur($_POST["id_fournisseur"]);
		header('Location:fournisseur.php');
	}

?>
<?PHP
	  include_once '../../controller/materielC.php';

	$materielC=new materielC();
	
	if (isset($_POST["id_materiel"])){
		$materielC->supprimerMateriel($_POST["id_materiel"]);
		header('Location:showService.php');
	}

?>
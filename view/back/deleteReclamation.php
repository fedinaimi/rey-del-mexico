<?PHP
	
    include_once '../../controller/reclamationC.php';

	$reclamationC=new reclamationC();
	
	if (isset($_POST["id_reclamation"])){
		$reclamationC->supprimerRelamation($_POST["id_reclamation"]);
		header('Location:showReclamation.php');
	}

?>
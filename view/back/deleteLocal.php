<?PHP
	
    include_once '../../controller/localC.php';

	$localC=new localC();
	
	if (isset($_POST["id_local"])){
		$localC->supprimerLocal($_POST["id_local"]);
		header('Location:showLocal.php');
	}

?>
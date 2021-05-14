<?PHP
	include "../../controller/clientC.php";

	$clientC=new clientC();
	
	if (isset($_POST["id_client"])){
		$clientC->supprimerClient($_POST["id_client"]);
		header('Location:showClient.php');
	}

?>
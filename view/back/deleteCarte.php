<?PHP
	include_once "../../controller/carteC.php";

	$carteC=new carteC();
	

	if (isset($_POST["id_carte"]))
	{


		$carteC->supprimerCarte($_POST["id_carte"]);
		header('Location:showCarteFidelite.php');
	}

?>
<?PHP
	include "../controller/chefC.php";

	$chefC=new chefC();
	
	if (isset($_POST["id"])){
		$chefC->supprimerChef($_POST["id"]);
		header('Location:showChef.php');
	}

?>
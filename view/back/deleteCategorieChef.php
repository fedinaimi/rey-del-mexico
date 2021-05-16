<?PHP
	
	 require_once '../../controller/categorieChefC.php';
	 $error = "";
	 $categorieChef = null;
	$categorieChefC=new categorieChefC();
	
	if (isset($_POST["id"])){
		$categorieChefC->supprimerCategorieChef($_POST["id"]);	
			header('Location:showCategorieChef.php');
	}

?>
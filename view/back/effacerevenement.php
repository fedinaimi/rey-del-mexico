<?PHP
	 
	 include_once '../../controller/evenementC.php';
	 $error = "";
	 $evenement = null;
	$evenement_C=new evenementC();
	
	if (isset($_POST["id"])){
		$evenement_C->effacerevenement($_POST["id"]);
		header('Location:showEvenement.php');
	}

?>
<
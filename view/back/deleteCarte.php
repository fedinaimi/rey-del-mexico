<?PHP
	include_once "../../controller/carteC.php";

	$carteC=new carteC();
	
<<<<<<< HEAD
	if (isset($_POST["id_carte"]))
	{
=======
	if (isset($_POST["id_carte"])){
>>>>>>> fc201f0 (Signed-off-by: ahmed bahrouni <ahmed.bahrouni@esprit.tn>)
		$carteC->supprimerCarte($_POST["id_carte"]);
		header('Location:showCarteFidelite.php');
	}

?>
<?PHP
	 
	 include_once '../../controller/reservationC.php';
	 $error ="";
	 $reservation = null;
	$reservationC=new reservationC();
	
	if (isset($_POST["id_reservation"])){
		$reservationC->effacerreservation($_POST["id_reservation"]);
        header('Location:showReservation.php');
	}

?>

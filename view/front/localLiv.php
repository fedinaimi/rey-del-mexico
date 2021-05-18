<?php

session_start();
include "../../controller/panierC.php";
$panierC=new panierC();


$panierC->modifierpanierLocal($_POST["panier"],$_POST["local"]);
header("location:panier.php");

?>
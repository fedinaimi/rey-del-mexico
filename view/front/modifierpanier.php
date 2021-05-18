<?php
include "../../controller/panierC.php";


$idpanier=$_POST["idpanier"];
$qte=$_POST["qte"];


$panierC=new panierC();
$panierC->modifierpanier($idpanier,$qte);
header("location:panier.php");
?>
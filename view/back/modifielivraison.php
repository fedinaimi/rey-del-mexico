<?php
include "../../controller/livraisonC.php";


$id=$_POST["id"];
$etat=$_POST["etat"];


$livraisonC=new livraisonC();
$livraisonC->modifierlivraison($id,$etat);
header("location:showLivraison.php");
?>
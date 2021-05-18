<?php
include "../../controller/commandeC.php";


$id_commande=$_POST["id_commande"];
$etat=$_POST["etat"];


$commandeC=new commandeC();
$commandeC->modifiercommande($id_commande,$etat);
header("location:showCommande.php");
?>
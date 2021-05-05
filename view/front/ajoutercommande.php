<?php
include "../../model/commande.php";
include_once "../../controller/commandeC.php";
include_once "../../controller/panierC.php";


$panierC=new panierC();
if (isset($_POST["client"]))
    $panierC->supprimertout($_POST["client"]);

    $commande= new commande($_POST["id_commande"],$_POST["client"],$_POST["prix_tot"],$_POST["etat"],$_POST["nomproduit"],$_POST["qte"]);
    $commandeC= new commandeC();
    $commandeC->ajoutercommande($commande);
      header("location:panier.php");
      //header("location:../../view/back/commande.php");

?>	
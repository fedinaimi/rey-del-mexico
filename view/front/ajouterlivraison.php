<?php
include "../../model/livraison.php";
include_once "../../controller/livraisonC.php";
include_once "../../controller/panierC.php";


$panierC=new panierC();
if (isset($_POST["client"]))
    $panierC->supprimertout($_POST["client"]);

    $livraison= new livraison($_POST["id"],$_POST["client"],$_POST["etat"],$_POST["frais_livraison"],$_POST["local"]);
    $livraisonC= new livraisonC();
    $livraisonC->ajouterlivraison($livraison);
      header("location:panier.php");
      //header("location:../../view/back/commande.php");

?>	
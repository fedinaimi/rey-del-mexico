<?php
session_start();

include "../../controller/livraisonC.php";
include "../../controller/panierC.php";


$panierC=new panierC();
if (isset($_POST["client"]))
    $panierC->supprimertout($_POST["client"]);

    $livraison= new livraison($_POST["client"],$_POST["etat"],$_POST["frais_livraison"]+7,$_POST["local"]);
    $livraisonC= new livraisonC();
    $livraisonC->ajouterlivraison($livraison);
      header("location:panier.php");
      //header("location:../../view/back/commande.php");

?>	
<?php
session_start();
include_once "../../controller/panierC.php";
include_once "../../controller/produitC.php";

 if(!isset($_SESSION['idc'])){   header('Location:connexion.php'); } else{

if (isset($_GET["id"])){

    $panier= new panier($_GET["img"],$_GET["libelle"],(int) $_GET["prix"],1 ,$_SESSION['idc'],(int)$_GET["id"],1 );
    $panierC= new panierC();
    $panierC->ajouterpanier($panier);
     header("location:panier.php");
    }}
    
?>	
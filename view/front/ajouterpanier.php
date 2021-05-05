
<?php
session_start();
include "../../model/panier.php";
include "../../controller/panierC.php";

if( isset($_POST["idpanier"]) and isset($_POST["idpanier"]) and isset($_SESSION['imgproduit']) and isset($_POST["nomproduit"]) and isset($_POST["prixproduit"]) and isset($_POST["qte"]) )
{
	echo "ça marche" ;
	$x=0;
	$panierC=new panierC();
	 $list=$panierC->afficherpanier($_SESSION['idpanier']);
	 foreach ($list as $row ) {
	 	if ($row['nomproduit']==$_POST["nomproduit"]) {
	 		$x=1;
	 	}
	 }


if($x==0)
{
    $panier=new panier($_SESSION['idpanier'],$_POST["idpanier"] ,$_POST['imgproduit'],$_POST["nomproduit"],$_POST["prixproduit"],$_POST["qte"]);
    $panierC=new panierC();
 
    $panierC->ajouterpanier($panier);
}
else
{
 $panierC=new panierC();
 $panierC->modifier($_POST["nomproduit"]);

}  
    header('Location: panier.php');
        
 }  

else
{
     header('Location: panier.php');
}
?>
<?php

include_once "../../config.php";
class panierC
{
    function ajouterpanier($panier)
    {   
   
        
        $sql= "insert into panier(idpanier,imgproduit,nomproduit,prixproduit,qte) values (:idpanier,:imgproduit,:nomproduit,:prixproduit,:qte)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            
            $client=$panier->getclient();
            $nomproduit=$panier->getnomproduit();
            $imgproduit=$panier->getimgproduit();
            $prixproduit=$panier->getprixproduit();
            $qte=$panier->getqte();
          
            $req->bindValue(':client',$client);
            $req->bindValue(':nomproduit',$nomproduit);
            $req->bindValue(':imgproduit',$imgproduit);
            $req->bindValue(':prixproduit',$prixproduit);
            $req->bindValue(':qte',$qte);
            

            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un panier avec ce client existe deja');

        }

    
     }
     function afficherpanier()
    {

        $sql="select * from panier ";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerpanier($idpanier){
        $sql="DELETE FROM panier where  idpanier= :idpanier ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idpanier',$idpanier);
        try{
            $req->execute();
           // header('Location: 1.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function supprimertout($client){
    $sql="DELETE FROM panier where client= :client";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':client',$client);
    try{
        $req->execute();
       // header('Location: index.php');
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function modifierpanier($idpanier,$qte)
    {
        $sql="update panier set  qte='$qte' where idpanier='$idpanier'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    
 function calculerpanier($idpanier){
        $sql="select count(*) as nb from panier  ";
        $db = config::getConnexion();
        
        try{
             $nb=$db->query($sql);
             return $nb->fetch();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}

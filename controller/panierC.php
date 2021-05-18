<?php

include_once "../../config.php";
include "../../model/panier.php"; 
class panierC
{
    function ajouterpanier($panier)
    {   
           $sql = "INSERT INTO panier( imgproduit, nomproduit,prix, qte, client, produit,local)
           values(:imgproduit, :nomproduit, :prix, :qte, :client, :produit,:local)";
           $db = config::getConnexion();
           try {
            $query = $db->prepare($sql);
            $query->execute([
                'imgproduit' => $panier->getimgproduit(),
                'nomproduit' => $panier->getnomproduit(),
                     'prix' => $panier->getprix(),
                'qte' => $panier->getqte(),
                     'client' => $panier->getclient(),
                'produit' => $panier->getproduit(),
                'local' => $panier->getLocal()
                
            ]);
            
          } catch(Exception $e) {
              die('Erreur: ' .$e->getMessage());
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
    function modifierpanierLocal($idpanier,$local)
    {
        $sql="update panier set  local='$local' where idpanier='$idpanier'";
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

    function modifier($nomproduit)
    {
        $sql="update panier set qte= qte+1 where nomproduit='$nomproduit'";
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

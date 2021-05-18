<?php

require_once "../../config.php";
include "../../model/commande.php";
class commandeC
{
    function ajoutercommande($commande)
    {
        $sql= "insert into commande( client,prix_tot,etat,nomproduit,qte) values (:client,:prix_tot,:etat,:nomproduit,:qte)";
       
      
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            
           
            $prix_tot=$commande->getprix_tot();
            $nomproduit=$commande->getnomproduit();
            $client=$commande->getclient();
          
         
            $etat=$commande->getetat();
            $qte=$commande->getqte();
           

          
          
            $req->bindValue(':prix_tot',$prix_tot);
            $req->bindValue(':client',$client);
          
              
              $req->bindValue(':etat',$etat);
              $req->bindValue(':nomproduit',$nomproduit);
              $req->bindValue(':qte',$qte);
          
          

            $req->execute();
            $from = "fedi.naimi@esprit.tn";
            $to = "fadibrouse@gmail.com";
            $subject = "Commande";
            $message = "votre commande est en cours de traitement ";
            $headers = "From:" . $from;
            mail($to, $subject, $message, $headers);

        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());

        }

    
     }
     function affichercommande()
    {

        $sql="select * from commande ORDER BY prix_tot ASC";

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
    function affichercommande1()
    {

        $sql="SELECT * FROM commande  ";

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
       
       
 
     function affichercommandetri()
    {

        $sql="select * from commande ORDER BY prix_tot  desc";

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
    function supprimercommande($id_commande){
        $sql="DELETE FROM commande where id_commande= :id_commande";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_commande',$id_commande);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function modifiercommande($id_commande,$etat)
    {
        $sql="update commande set  etat='$etat' where id_commande='$id_commande'";
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
    function recherchercommande($str){
        $sql="SELECT * FROM commande WHERE id_commande like '".$str."%' or etat like '".$str."%' or client like '".$str."%' ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

   

}

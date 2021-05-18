<?php

require_once "../../config.php";
include "../../model/livraison.php";

class livraisonC
{
    function ajouterlivraison($livraison)
    {
      
        $sql= "insert into livraison( client,etat,frais_livraison,local ) values (:client,:etat,:frais_livraison,:local )";
       
      
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            
         
            $etat=$livraison->getetat();
            $frais_livraison=$livraison->getfrais_livraison();
            $local=$livraison->getlocal();
         
            $client=$livraison->getclient();
            

            $req->bindValue(':frais_livraison',$frais_livraison);
             $req->bindValue(':local',$local);
              
              $req->bindValue(':client',$client);
              $req->bindValue(':etat',$etat);
            
          
          

            $req->execute();
            $from = "fedi.naimi@esprit.tn";
            $to = "fadibrouse@gmail.com";
            $subject = "livraison";
            $message = "votre livraison est confirmer ";
            $headers = "From:" . $from;
            mail($to, $subject, $message, $headers);

        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());

        }

    
     }
     function afficherlivraison()
    {

        $sql="select * from livraison ";

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
  
       
    function supprimerlivraison($id){
        $sql="DELETE FROM livraison where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function modifierlivraison($id,$etat)
{
    $sql="update livraison set  etat='$etat' where id='$id'";
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

}

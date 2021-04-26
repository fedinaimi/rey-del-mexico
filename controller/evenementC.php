<?php
require_once '../../config.php';
require_once "../../model/evenement.php"; 

class evenementC
{
    function ajouterevenement($evenement)
    {
          
        $sql = "INSERT INTO evenement (libelle,date,duree,description,local)
        values(:libelle,:date,:duree,:description,:local)";
        $db = config::getConnexion();
        try {
         $query = $db->prepare($sql);
         $query->execute([
             
             'libelle' => $evenement->getlibelle(),
             'date' => $evenement->getdate(),
             'duree' => $evenement->getduree(),     
             'description' => $evenement->getdescription(),
             
                  'local' => $evenement->getlocal(),
             
         ]);
         
       } catch(Exception $e) {
           die('Erreur: ' .$e->getMessage());
       }
     }
    
     
     function afficherevenement()
    {

        $sql="SELECT * FROM evenement ";

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
       
    function listeLocal()
    {
      $sql = " SELECT * FROM local";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
        }

     
    function effacerevenement($id){
        $sql="DELETE FROM evenement where id= :id";
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
function modifierevenement($uti,$id){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE evenement SET 
              
                libelle = :libelle,
                date = :date,
                duree = :duree,
                description = :description,
                
    local = :local
            where id = :id'
        );
        $query->execute([
            
            'libelle' => $uti->getlibelle(),
            'date' => $uti->getdate(),
            'duree' => $uti->getduree(),
            'description' => $uti->getdescription(),
            'id' => $id,
            'local' =>$uti->getlocal(),
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
function recupererevenement($id){
    $sql="SELECT * FROM evenement WHERE id=$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $test=$query->fetch();
        return $test;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}   


}
?>
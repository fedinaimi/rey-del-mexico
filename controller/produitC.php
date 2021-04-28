<?php
require_once '../config.php';
require_once "../model/produit.php"; 




class produitC
{
    function ajouterproduit($produit)
    {
          
        $sql = "INSERT INTO produit (id,libelle,nb_calories,prix,description,categorie,fournisseur)
        values(:id,:libelle,:nb_calories,:prix,:description,:categorie,:fournisseur)";
        $db = config::getConnexion();
        try {
         $query = $db->prepare($sql);
         $query->execute([
             'id' => $produit->getid(),
             'libelle' => $produit->getlibelle(),
             'nb_calories' => $produit->getnb_calories(),
                  'prix' => $produit->getprix(),
                  'description' => $produit->getdescription(),
                  'categorie' => $produit->getcategorie(),
                  'fournisseur' => $produit->getfournisseur()

             
         ]);
         
       } catch(Exception $e) {
           die('Erreur: ' .$e->getMessage());
       }
     }
    
     
     function afficherproduit()
    {

        $sql="SELECT * FROM produit ";

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

     
    function effacerproduit($id){
        $sql="DELETE FROM produit where id= :id";
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
function modifierproduit($produit,$id){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE produit SET 
                libelle = :libelle, 
                nb_calories = :nb_calories,
                description = :description,
                prix = :prix,
                categorie = :categorie,
                fournisseur = :fournisseur,
                
            WHERE id = :id'
        );
        $query->execute([
            'libelle' => $produit->getlibelle(),
            'nb_calories' => $produit->getnb_calories(),
            'description' => $produit->getdescription(),
            'prix' => $produit->getprix(),
            'categorie' => $produit->getcategorie(),
            'fournisseur' => $produit->getfournisseur(),
            
            'id' => $id
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
function recuperproduit($id){
    $sql="SELECT * from produit where id=$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $talent=$query->fetch();
        return $produit;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}   


}
?>
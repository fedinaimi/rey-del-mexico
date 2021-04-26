<?php
require_once"../../config.php";
include "../../model/produit.php"; 

class produitC{

    function afficherProduit()
    {
      $sql = " SELECT * FROM produit";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }

    function listeCategorie()
    {
      $sql = " SELECT * FROM categorie";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }

    function listeFournisseur()
    {
      $sql = " SELECT * FROM fournisseur";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    
	
    function ajoutProduit($produit)
    {
        
       $sql = "INSERT INTO produit ( libelle, nb_calories,prix, description, categorie, fournisseur)
       values(:libelle, :nb_calories, :prix, :description, :categorie, :fournisseur)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'libelle' => $produit->getLibelle(),
            'nb_calories' => $produit->getNb_calories(),
	         	'prix' => $produit->getPrix(),
            'description' => $produit->getDescription(),
	         	'categorie' => $produit->getCategorie(),
		    'fournisseur' => $produit->getFournisseur()
            
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function supprimerProduit($id){
			$sql="DELETE FROM produit WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
    function modifierProduit($produit, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						libelle = :libelle, 
						nb_calories = :nb_calories,
						prix = :prix,
						description = :description,
						categorie = :categorie,
                        fournisseur = :fournisseur
					WHERE id = :id'
				);
				$query->execute([
					'libelle' => $produit->getLibelle(),
					'nb_calories' => $produit->getNb_calories(),
					'prix' => $produit->getPrix(),
						 'description' => $produit->getDescription(),
					'categorie' => $produit->getCategorie(),
						 'fournisseur' => $produit->getFournisseur(),
				    'id' => $id      ]);

				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererProduit($id){
			$sql="SELECT * from produit where	id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererProduit1($id){
			$sql="SELECT * from produit where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$produit = $query->fetch(PDO::FETCH_OBJ);
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

  
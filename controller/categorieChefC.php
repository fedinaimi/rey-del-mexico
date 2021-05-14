<?php
require_once '../../config.php';
include "../../model/categorieChef.php"; 

class categorieChefC{

    function afficherCategorieChef()
    {
      $sql = " SELECT * FROM categorieChef order by id DESC ";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
	function afficherElementCategorieChef($id)
    {
		$sql="SELECT * from categorieChef where	id=$id";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$categorie=$query->fetch(PDO::FETCH_OBJ);
			return $categorie;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
    }
   

    function ajoutCategorieChef($categorieChef)
    {
        
       $sql = "INSERT INTO categorieChef (libelle)
       values(:libelle)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'libelle' => $categorieChef->getLibelleChef()  
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function supprimerCategorieChef($id){
			$sql="DELETE FROM categorieChef WHERE id= :id";
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
		function modifierCategorieChef($Utilisateur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorieChef SET 
						libelle  = :libelle 	

					WHERE id = :id'
				);
				$query->execute([
					'libelle' => $Utilisateur->getLibelle(),
					'id' => $id
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererCategorieChef($id){
			$sql="SELECT * from categorieChef where	id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$categorie=$query->fetch();
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererCategorieChef1($id){
			$sql="SELECT * from categorieChef where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$categorie = $query->fetch(PDO::FETCH_OBJ);
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

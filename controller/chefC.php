<?php
include "../../config.php";
require_once "../../model/chef.php"; 

class chefC{

    function afficherChef()
    {
      $sql = " SELECT * FROM chef";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function listeLocal1()
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
    
	
    function ajoutChef($chef)
    {
        
       $sql = "INSERT INTO chef (nom, prenom, email, adresse, dateNais, categories, local)
       values(:nom, :prenom, :email, :adresse, :dateNais, :categories, :local)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'nom' => $chef->getNom(),
            'prenom' => $chef->getPrenom(),
            'email' => $chef->getEmail(),
	         	'adresse' => $chef->getAdresse(),
            'dateNais' => $chef->getDateNais(),
	         	'categories' => $chef->getCategories(),
				 'local' => $chef->getLocal()
            
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function supprimerChef($id){
			$sql="DELETE FROM chef WHERE id= :id";
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
    function modifierChef($chef, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE chef SET 
						nom = :nom, 
						prenom = :prenom,
						email = :email,
						adresse = :adresse,
						dateNais = :dateNais,
                        categories = :categories,
						local = :local
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $chef->getNom(),
					'prenom' => $chef->getPrenom(),
					'email' => $chef->getEmail(),
						 'adresse' => $chef->getAdresse(),
					'dateNais' => $chef->getDateNais(),
						 'categories' => $chef->getCategories(),
						 'local' => $chef->getLocal(),
					     'id' => $id
                  
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererChef($id){
			$sql="SELECT * from chef where	id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$chef=$query->fetch();
				return $chef;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererChef1($id){
			$sql="SELECT * from chef where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$chef = $query->fetch(PDO::FETCH_OBJ);
				return $chef;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

  
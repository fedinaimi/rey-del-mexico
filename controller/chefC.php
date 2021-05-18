<?php
require_once "../../config.php";
 include "../../model/chef.php"; 

class chefC{

    function afficherChef()
    {
      $sql = " SELECT * FROM chef order by dateNais DESC";
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
        
       $sql = "INSERT INTO chef (nom, prenom, email, adresse, dateNais, categorie, local, img , fb)
       values(:nom, :prenom, :email, :adresse, :dateNais, :categorie, :local, :img , :fb)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'nom' => $chef->getNom(),
            'prenom' => $chef->getPrenom(),
            'email' => $chef->getEmail(),
	         	'adresse' => $chef->getAdresse(),
            'dateNais' => $chef->getDateNais(),
	         	'categorie' => $chef->getCategories(),
				 'local' => $chef->getLocal(),
				 'img' => $chef->getImg(),
				 'fb' => $chef->getFb()
            
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
                        categorie = :categorie,
						local = :local,
						img = :img,
						fb = :fb
					WHERE id = :id'
				);
				$query->execute([
					'id' => $id,
					'nom' => $chef->getNom(),
					'prenom' => $chef->getPrenom(),
					'email' => $chef->getEmail(),
						 'adresse' => $chef->getAdresse(),
					'dateNais' => $chef->getDateNais(),
						 'categorie' => $chef->getCategories(),
						 'local' => $chef->getLocal(),
						 'img' => $chef->getImg(),
						 'fb' => $chef->getFb()
					     
                  
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

  
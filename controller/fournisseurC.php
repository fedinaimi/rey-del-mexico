<?php
require_once "../../config.php";
include "../../model/fournisseur.php"; 

class fournisseurC{

    function afficherFournisseur()
    {
      $sql = " SELECT * FROM fournisseur ORDER by id_fournisseur DESC";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
	
	
    function ajoutFournisseur($fourni)
    {
        
       $sql = "INSERT INTO fournisseur (nom, prenom, email, tel, categorie, local, img)
       values(:nom, :prenom, :email, :tel, :categorie, :local, :img)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'nom' => $fourni->getNom(),
            'prenom' => $fourni->getPrenom(),
            'email' => $fourni->getEmail(),
	         	'tel' => $fourni->getTel(),
            'categorie' => $fourni->getCategorie(),
			'img' => $fourni->getImg(),
	         	'local' => $fourni->getLocal()
				
             ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }


    function supprimerFournisseur($id_fournisseur){
			$sql="DELETE FROM fournisseur WHERE id_fournisseur= :id_fournisseur";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_fournisseur',$id_fournisseur);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
    function modifierFournisseur($Utilisateur, $id_fournisseur){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE fournisseur SET 
						nom = :nom, 
						prenom = :prenom,
						email = :email,
						tel = :tel,
						categorie = :categorie,
                        local = :local,
			            img = :img
					WHERE id_fournisseur = :id_fournisseur'
				);
				$query->execute([
					'nom' => $Utilisateur->getNom(),
					'prenom' => $Utilisateur->getPrenom(),
					'email' => $Utilisateur->getEmail(),
					'tel' => $Utilisateur->getTel(),
					'categorie' => $Utilisateur->getCategorie(),
					'id_fournisseur' => $id_fournisseur,
          'local' => $Utilisateur->getLocal(),
		  'img' => $Utilisateur->getImg(),
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererFournisseur($id_fournisseur){
			$sql="SELECT * from fournisseur where	id_fournisseur=$id_fournisseur";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererFournisseur1($id_fournisseur){
			$sql="SELECT * from fournisseur where id_fournisseur=$id_fournisseur";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

  
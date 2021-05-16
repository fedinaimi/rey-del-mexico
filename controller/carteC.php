<?php
include "../../config.php";
require_once "../../model/fournisseur.php"; 

class carteC{

    function afficherCarte()
    {
      $sql = " SELECT * FROM carte";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function listeClientSansCarte()
    {
      $sql = " SELECT * FROM client where statutC=0 ";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
   
	
    function ajoutCarte($carte)
    {
        
       $sql = "INSERT INTO carte (points, client, statut, dateCreation)
       values(:points, :client, :statut, :dateCreation)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'points' => $carte->getPoints(),
            'client' => $carte->getClient(),
            'statut' => $carte->getStatut(),
	        'dateCreation' => $carte->getDate()    
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function supprimerCarte($id_carte){
			$sql="DELETE FROM carte WHERE id_carte= :id_carte";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_carte',$id_carte);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
<<<<<<< HEAD
	function modifierCarte($Utilisateur, $id_carte){
=======
		function modifierCarte($Utilisateur, $id_carte){
>>>>>>> fc201f0 (Signed-off-by: ahmed bahrouni <ahmed.bahrouni@esprit.tn>)
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE carte SET 
						points = :points, 
						client = :client,
						statut = :statut,
						dateCreation = :dateCreation
						
           
					WHERE id_carte = :id_carte'
				);
				$query->execute([
					'points' => $Utilisateur->getPoints(),
					'client' => $Utilisateur->getClient(),
					'statut' => $Utilisateur->getStatut(),
					'dateCreation' => $Utilisateur->getDate(),
					'id_carte' => $id_carte
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererCarte($id_carte){
			$sql="SELECT * from carte where	id_carte=$id_carte";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$cartee=$query->fetch();
				return $cartee;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererCarte1($id_carte){
			$sql="SELECT * from carte where id_carte=$id_carte";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$cartee = $query->fetch(PDO::FETCH_OBJ);
				return $cartee;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

  
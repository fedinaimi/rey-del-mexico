<?php
require_once "../../config.php";
include "../../model/carte.php"; 

class carteC{

    function afficherCarte()
    {
      $sql = " SELECT * FROM carte ORDER by points DESC";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
	function triCarteDate()
	{
		$sql="SELECT * from carte ORDER by dateCreation ASC";
		$db = config::getConnexion();
		try{
		$listeCarte=$db->query($sql);
		return $listeCarte;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
   
	
    function ajoutCarte($carte)
    {
        
       $sql = "INSERT INTO carte (points, statut, dateCreation)
       values(:points, :statut, :dateCreation)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'points' => $carte->getPoints(),
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

	function modifierCarte($Utilisateur, $id_carte){

			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE carte SET 
						points = :points, 
						statut = :statut,
						dateCreation = :dateCreation
					WHERE id_carte = :id_carte'
				);
				$query->execute([
					'points' => $Utilisateur->getPoints(),
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

  
<?php
require_once "../../config.php";
include "../../model/reclamation.php"; 

class reclamationC{

    function afficherReclamation()
    {
      $sql = " SELECT * FROM reclamation ORDER BY client ASC";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    
	function modifierReclamation($id,$statut)
    {
        $sql="update reclamation set  statut='$statut' where id_reclamation='$id'";
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

    function ajoutReclamation($reclamation)
    {
        
       $sql = "INSERT INTO reclamation (message, sujet, statut, client)
       values(:message, :sujet, :statut, :client)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'message' => $reclamation->getMessage(),
			'sujet' => $reclamation->getSujet(),
            'statut' => $reclamation->getStatut(),
            'client' => $reclamation->getClient()
            
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }

    function supprimerRelamation($id_reclamation){
			$sql="DELETE FROM reclamation WHERE id_reclamation= :id_reclamation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_reclamation',$id_reclamation);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
    function modifierRecamation($reclamation,$id_reclamation){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET 
						message = :message,
						sujet = :sujet, 
						statut = :statut,
						client = :client
						
					WHERE id_reclamation = :id_reclamationt'
				);
				$query->execute([
					'message' => $reclamation->getMessage(),
					'sujet' => $reclamation->getSujet(),
					'statut' => $reclamation->getStatut(),
					'client' => $reclamation->getClient(),
					     'id_reclamation' => $id_reclamation
                  
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		

		function recupererReclamation($id_reclamation){
			$sql="SELECT * from reclamation where	id_reclamation=$id_reclamation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reclamation=$query->fetch();
				return $reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererReclamation1($id_reclamation){
			$sql="SELECT * from reclamation where id_reclamation=$id_reclamation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$reclamation = $query->fetch(PDO::FETCH_OBJ);
				return $reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	
	
}

  
<?php
require_once "../../config.php";
include "../../model/materiel.php";

class materielC{

    function afficherMateriel()
    {
      $sql = " SELECT * FROM materiel order by date_achat ASC";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
  
    
	
    function ajoutMateriel($materiel)
    {
        
       $sql = "INSERT INTO materiel (libelle, date_achat, local,nbPieces)
       values(:libelle, :date_achat, :local, :nbPieces)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'libelle' => $materiel->getLibelle(),
            'date_achat' => $materiel->getDate_achat(),
				 'local' => $materiel->getLocal(),
				 'nbPieces' => $materiel->getNbPieces()
            
            
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function supprimerMateriel($id_materiel){
			$sql="DELETE FROM materiel WHERE id_materiel= :id_materiel";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_materiel',$id_materiel);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
    function modifierMateriel($materiel, $id_materiel){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE materiel SET 
						libelle = :libelle, 
						date_achat = :date_achat,
						local = :local,
						nbPieces = :nbPieces
					WHERE id_materiel = :id_materiel'
				);
				$query->execute([
					'libelle' => $materiel->getLibelle(),
					'date_achat' => $materiel->getDate_achat(),
						 'local' => $materiel->getLocal(),
						 'nbPieces' => $materiel->getNbPieces(),
					     'id_materiel' => $id_materiel
                  
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererMateriel ($id_materiel){
			$sql="SELECT * from materiel where	id_materiel=$id_materiel";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$materiel=$query->fetch();
				return $materiel;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererMateriel1($id_materiel){
			$sql="SELECT * from materiel where id_materiel=$id_materiel";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$materiel = $query->fetch(PDO::FETCH_OBJ);
				return $materiel;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

  
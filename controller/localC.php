<?php
include "../config.php";
require_once "../model/local.php"; 

class localC{

    function afficherLocal()
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
   
    
	
    function ajoutLocal($local)
    {
        
       $sql = "INSERT INTO local (adresse, nbTables, nbChaises, surface, libelle)
       values(:adresse, :nbTables, :nbChaises, :surface, :libelle)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'adresse' => $local->getAdresse(),
            'nbTables' => $local->getNbTables(),
            'nbChaises' => $local->getNbChaises(),
	         	'surface' => $local->getSurface(),
            'libelle' => $local->getLibelle(),
	         
            
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function supprimerLocal($id_local){
			$sql="DELETE FROM local WHERE id_local= :id_local";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_local',$id_local);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	
				
					
				
    function modifierLocal($local, $id_local){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE local SET 
						adresse = :adresse, 
						nbTables = :nbTables,
						nbChaises = :nbChaises,
						surface = :surface,
						libelle = :libelle
                       
					WHERE id_local = :id_local'
				);
				$query->execute([
					'id_local' => $id_local,
					'adresse' => $local->getAdresse(),
					'nbTables' => $local->getNbTables(),
					'nbChaises' => $local->getNbChaises(),
						 'surface' => $local->getSurface(),
					'libelle' => $local->getLibelle()
  
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererLocal($id_local){
			$sql="SELECT * from local where	id_local=$id_local";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$local=$query->fetch();
				return $local;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererLocal1($id_local){
			$sql="SELECT * from local where id_local=$id_local";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$local = $query->fetch(PDO::FETCH_OBJ);
				return $local;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

  
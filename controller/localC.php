<?php
require_once "../../config.php";
include "../../model/local.php";
class localC{

    function afficherLocal()
    {
      $sql = " SELECT * FROM local order by id_local DESC  ";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
	function rechercheLocal($id_local)
    {
		$sql="SELECT * from local where	id_local like $id_local or adresse like $id_local ";
		$db = config::getConnexion();
		try{
		
			$liste= $db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
    }
	
	function afficherElementLocal($id_local)
    {
		$sql="SELECT * from local where	id_local=$id_local";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$local=$query->fetch(PDO::FETCH_OBJ);
			return $local;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
    }
	function triLocal()
	{
		$sql="SELECT * from local ORDER by surface ASC";
		$db = config::getConnexion();
		try{
		$listeLocal=$db->query($sql);
		return $listeLocal;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
	function triLocalDate()
	{
		$sql="SELECT * from local ORDER by dateCreation ASC";
		$db = config::getConnexion();
		try{
		$listeLocal=$db->query($sql);
		return $listeLocal;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
    
	
    function ajoutLocal($local)
    {
        
       $sql = "INSERT INTO local (adresse, nbTables, nbChaises, surface, libelle,tel, dateCreation)
       values(:adresse, :nbTables, :nbChaises, :surface, :libelle, :tel, :dateCreation)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'adresse' => $local->getAdresse(),
            'nbTables' => $local->getNbTables(),
            'nbChaises' => $local->getNbChaises(),
	         	'surface' => $local->getSurface(),
            'libelle' => $local->getLibelle(),
			'tel' => $local->getTel(),
			'dateCreation' =>$local->getDate()
            
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
						libelle = :libelle,
                       tel = :tel,
					   dateCreation = :dateCreation
					WHERE id_local = :id_local'
				);
				$query->execute([
					'id_local' => $id_local,
					'adresse' => $local->getAdresse(),
					'nbTables' => $local->getNbTables(),
					'nbChaises' => $local->getNbChaises(),
						 'surface' => $local->getSurface(),
					'libelle' => $local->getLibelle(),
					'tel' => $local->getTel(),
					'dateCreation' => $local->getDate()
  
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

  
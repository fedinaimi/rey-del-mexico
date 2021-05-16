<?php
require_once "../../config.php";
include "../../model/livraison.php";
class livraisonC{

    function afficherLivraison()
    {
      $sql = " SELECT * FROM livraison";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
	
	
   
    
	
    function ajoutLivraison($livraison)
    {
        
       $sql = "INSERT INTO livraison (libelle, frais_livraison, local, commande, client, statut)
       values(:libelle, :frais_livraison,  :local, :commande, :client, :statut)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'libelle' => $livraison->getLibelle(),
            'frais_livraison' => $livraison->getFrais(),
            'local' => $livraison->getLocal(),
	         	'commande' => $livraison->getCommande(),
            'client' => $livraison->getClient(),
			'statut' => $livraison->getStatut()
			
            
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function supprimerLivraison($id){
			$sql="DELETE FROM livraison WHERE id= :id";
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
	
				
					
				
    function modifierLivraison($livraison, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE local SET 
						libelle = :libelle, 
						frais_livraison = :frais_livraison,
						local = :local,
						commande= :commande,
						client = :client,
                       statut = :statut
					 
					WHERE id = :id'
				);
				$query->execute([
					'id' => $id,
					'libelle' => $livraison->getLibelle(),
            'frais_livraison' => $livraison->getFrais(),
            'local' => $livraison->getLocal(),
	         	'commande' => $livraison->getCommande(),
            'client' => $livraison->getClient(),
			'statut' => $livraison->getStatut()
  
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererLivraison($id){
			$sql="SELECT * from livraison where	id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$livraison=$query->fetch();
				return $livraison;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererLivraison1($id){
			$sql="SELECT * from livraison where	id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$livraison = $query->fetch(PDO::FETCH_OBJ);
				return $livraison;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

  
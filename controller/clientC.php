<?php
require_once "../../config.php";
include "../../model/client.php"; 

class clientC{

    function afficherClient()
    {
      $sql = " SELECT * FROM client ORDER BY cin ASC";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function afficherElementClient($id)
    {
		$sql="SELECT * from client where id_client=$id";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$client=$query->fetch(PDO::FETCH_OBJ);
			return $client;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
    }
	
    function ajoutClient($client)
    {
        
		$sql = "INSERT INTO client (nom, prenom, dateNais, cin, email, mdp, reduction, carte)
		values(:nom, :prenom, :dateNais, :cin, :email, :mdp, :reduction, :carte)";
		$db = config::getConnexion();
		try {
		 $query = $db->prepare($sql);
		 $query->execute([
			 'nom' => $client->getNom(),
			 'prenom' => $client->getPrenom(),
			 'dateNais' => $client->getDateNais(),
				  'cin' => $client->getCin(),
			 'email' => $client->getEmail(),
				  'mdp' => $client->getMdp(),
				  'reduction' => $client->getReduction(),
				  'carte' => $client->getCarte()
			 
		 ]);
		 
	   } catch(Exception $e) {
		   die('Erreur: ' .$e->getMessage());
	   }
	 }
	
    function supprimerClient($id_client){
			$sql="DELETE FROM client WHERE id_client= :id_client";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_client',$id_client);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
    function modifierClient($client, $id_client){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE client SET 
						nom = :nom, 
						prenom = :prenom,
						dateNais = :dateNais,
						cin = :cin,
						email = :email,
						mdp = :mdp,
                        reduction = :reduction,
						carte = :carte
					WHERE id_client = :id_client'
				);
				$query->execute([
					'nom' => $client->getNom(),
					'prenom' => $client->getPrenom(),
					'dateNais' => $client->getDateNais(),
					'cin' => $client->getCin(),
						 'email' => $client->getEmail(), 
						 'mdp' => $client->getMdp(),
						 'reduction' => $client->getReduction(),
						 'carte' => $client->getCarte(),
					     'id_client' => $id_client
                  
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererClient($id_client){
			$sql="SELECT * from client where	id_client=$id_client";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$client=$query->fetch();
				return $client;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererClient1($id_client){
			$sql="SELECT * from client where id_client=$id_client";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$client = $query->fetch(PDO::FETCH_OBJ);
				return $client;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		
		
}

function authentificationClient($email,$mdp){
    $db=config::getConnexion();
    try{
		$sql = "select * from client where email = :email and mdp = :mdp ";
		$liste=$db->prepare($sql);
	
		$liste->bindValue(':email',$email);
		 $liste->bindValue(':mdp',$mdp);
		 $liste->execute();
         return ($liste->fetch());
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
 }


	
		
	
}

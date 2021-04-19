<?php
include "../config.php";
require_once "../model/fournisseur.php"; 

class fournisseurC{

    function afficherFournisseur()
    {
      $sql = " SELECT * FROM fournisseur";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function listeCategorie()
    {
      $sql = " SELECT * FROM categorie";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
    function listeLocal()
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
	
    function ajoutFournisseur($fourni)
    {
        
       $sql = "INSERT INTO fournisseur (nom_fournisseur, prenom_fournisseur, email, tel, categorie, local)
       values(:nom_fournisseur, :prenom_fournisseur, :email, :tel, :categorie, :local)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'nom_fournisseur' => $fourni->getNom(),
            'prenom_fournisseur' => $fourni->getPrenom(),
            'email' => $fourni->getEmail(),
	         	'tel' => $fourni->getTel(),
            'categorie' => $fourni->getCategorie(),
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

    function modifierFournisseur($fourni, $id_fournisseur){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE fournisseur SET 
						nom_fournisseur = :nom_fournisseur, 
						prenom_fournisseur = :prenom_fournisseur,
						email = :email,
            tel = :tel, 
						categorie = :categorie,
						local = :local,
					WHERE id_fournisseur = :id_fournisseur'
				);
				$query->execute([
          'nom_fournisseur' => $fourni->getNom(),
          'prenom_fournisseur' => $fourni->getPrenom(),
          'email' => $fourni->getEmail(),
           'tel' => $fourni->getTel(),
          'categorie' => $fourni->getCategorie(),
           'local' => $fourni->getLocal()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererFournisseur($id_fournisseur)
        {
			$sql="SELECT * from fournisseur where id_fournisseur=$id_fournisseur";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$fournisseur=$query->fetch(PDO::FETCH_OBJ);
				return $fournisseur;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


}

?>
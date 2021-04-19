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
	
    function ajoutFournisseur($fourni)
    {
        
       $sql = "INSERT INTO fournisseur (nom_fournisseur,prenom_fournisseur,email,tel)
       values(:nom_fournisseur,:prenom_fournisseur,:email,:tel)";
       $db = config::getConnexion();
       try {
        $query = $db->prepare($sql);
        $query->execute([
            'nom_fournisseur' => $fourni->getNom(),
            'prenom_fournisseur' => $fourni->getPrenom(),
            'email' => $fourni->getEmail(),
			'tel' => $fourni->getTel(),
            
        ]);
        
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
    }
}

?>
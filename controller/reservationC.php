<?php
require_once '../../config.php';
include "../../model/reservation.php"; 

class reservationC
{
    function ajouterreservation($reservation)
    {
          
        $sql = "INSERT INTO reservation (date,nb_perso,message,statut,client,local)
        values(:date,:nb_perso,:message,:statut,:client,:local)";
        $db = config::getConnexion();
        try {
         $query = $db->prepare($sql);
         $query->execute([
          
             'date' => $reservation->getdate(),
             'nb_perso' => $reservation->getnb_perso(),
                  'message' => $reservation->getmessage(),
      
                  
                  'statut' => $reservation->getstatut(),
                  'client' => $reservation->getclient(),
                  'local' => $reservation->getlocal()
                  
                  ]);
         
       } catch(Exception $e) {
           die('Erreur: ' .$e->getMessage());
       }
     }
    
    
     
     function afficherreservation()
    {

        $sql="SELECT * FROM reservation ORDER BY date ";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
       function effacerreservation($id_reservation){
        $sql="DELETE FROM reservation where id_reservation= :id_reservation";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_reservation',$id_reservation);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function modifierreservation($uti,$id_reservation){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE reservation SET 
              
                date = :date,
                nb_perso = :nb_perso,
                message = :message,
                statut = :statut,
                client = :client,
                
    local = :local
            where id_reservation = :id_reservation'
        );
        $query->execute([
            
            'date' => $uti->getdate(),
            'nb_perso' => $uti->getnb_perso(),
            'message' => $uti->getmessage(),
            'statut' =>$uti->getstatut(),
            'client' =>$uti->getclient(),
           'local' =>$uti->getlocal(),
            'id_reservation' => $id_reservation,
           ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
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
    function listeclient()
    {
      $sql = " SELECT * FROM client";
      $db = config::getConnexion();
      try {
        $liste= $db->query($sql);
        return $liste;
      } catch(Exception $e) {
          die('Erreur: ' .$e->getMessage());
      }
        }
        function recupererreservation($id_reservation){
			$sql="SELECT * from reservation where	id_reservation=$id_reservation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererreservation1($id_reservation){
			$sql="SELECT * from reservation where id_reservation=$id_reservation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}     

       
        
    }
?>
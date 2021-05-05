<?php

include_once "../../config.php";
include "../../model/user.php";
class userC
{

	
 	function authentification(){

    $db=config::getConnexion();
    try{
		$liste=$db->prepare("select * from user where login_user = :login_user and mdp_user = :mdp_user");
		 $liste->bindValue(':login_user',$this->login_user);
		 $liste->bindValue(':mdp_user',$this->mdp_user);
		 $liste->execute();
         return ($liste->fetchColumn()>-1);
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
 }
}
?>
<?php

require_once "../../config.php";
include "../../model/user.php";
class userC
{
 	function authentification($login_user,$mdp_user){
    $db=config::getConnexion();
    try{
		$sql = "select * from user where login_user = :login_user and mdp_user = :mdp_user ";
		$liste=$db->prepare($sql);
	//	$liste->execute(array('login_user'=>$login_user , 'mdp_user'=>$mdp_user ));
		$liste->bindValue(':login_user',$login_user);
		 $liste->bindValue(':mdp_user',$mdp_user);
		 $liste->execute();
         return ($liste->fetch());
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
 }
}
?>

     
     
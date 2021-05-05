<?PHP
class commande{
	
	private $id_commande;
	private $prix_tot;
	private $nomproduit;
	
	private $client;
	private $etat;
	private $qte;
	

	function __construct($id_commande,$client,$prix_tot,$etat,$nomproduit,$qte){
		$this->id_commande=$id_commande;
		$this->client=$client;
		$this->prix_tot=$prix_tot;
		
		$this->etat=$etat;
		$this->nomproduit=$nomproduit;
		$this->qte=$qte;
	
	
	}
	function getqte(){
		return $this->qte;
	}

	
	function getprix_tot(){
		return $this->prix_tot;
	}
	function getnomproduit(){
		return $this->nomproduit;
	}
	function getid_commande(){
		return $this->id_commande;
	}
	function getclient(){
		return $this->client;
	}

	function getetat(){
		return $this->etat;
	}



	function setprix_tot($prix_tot){
		$this->prix_tot=$prix_tot;
	}
	function setnomproduit($nomproduit){
		$this->nomproduit=$nomproduit;
	}
	function setid_commande($id_commande){
		$this->id_commande;
	}
	function setclient($client){
		$this->client;
	}

	function setetat($etat){
		$this->etat;
	}
}
function setqte($qte){
$this->qte=$qte;
}



?>
<?PHP
class livraison{
	
	private $id;
	private $etat;
	private $frais_livraison;
	
	private $local;
	private $client;

    
	function __construct($id,$client,$etat,$frais_livraison,$local){
		$this->id=$id;
		$this->frais_livraison=$frais_livraison;
		$this->local=$local;
		
		$this->client=$client;
		$this->etat=$etat;

	
	
	}
	function getid(){
		return $this->id;
	}

	
	function getclient(){
		return $this->client;
	}
	function getetat(){
		return $this->etat;
	}
	function getfrais_livraison(){
		return $this->frais_livraison;
	}
	function getlocal(){
		return $this->local;
	}



	function setid($id){
		$this->id=$id;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	function setfrais_livraison($frais_livraison){
		$this->frais_livraison;
	}
	function setlocal($local){
		$this->local;
	}

	function setclient($client){
		$this->client;
	}
}



?>
<?PHP
class panier{
	
	
	private $client;
	private $nomproduit;
	private $imgproduit;
	private $prixproduit;
	private $qte;
	private $idpanier;
	

	

	function __construct($client,$nomproduit,$imgproduit,$prixproduit,$qte,$idpanier){
		
		$this->nomproduit=$nomproduit;
		
		$this->imgproduit=$imgproduit;
		$this->client=$client;
		$this->prixproduit=$prixproduit;
		$this->qte=$qte;
		$this->idpanier=$idpanier;
		
	
	}
	
	
	function getnomproduit(){
		return $this->nomproduit;
	}
	
	
	function getimgproduit(){
		return $this->imgproduit;
	}
	function getclient(){
		return $this->client;
	}
	function getprixproduit(){
		return $this->prixproduit;
	}
	function getidpanier(){
		return $this->idpanier;
	}
	function getqte(){
		return $this->qte;
	}

	function setnomproduit($nomproduit){
		$this->nomproduit=$nomproduit;
	}
	
	function setimgproduit($imgproduit){
		$this->imgproduit=$imgproduit;
	}
	function setclient($client){
		$this->client=$client;
	}
		function setprixproduit($prixproduit){
		$this->prixproduit=$prixproduit;
	}
		function setqte($qte){
		$this->qte=$qte;
	}
	function setidpanier($idpanier){
		$this->idpanier=$idpanier;
	}
	

	
}

?>
<?PHP
class panier{
	
	
	private ?int$client=null;
	private ?string $nomproduit=null;
	private ?string $imgproduit=null;
	private  ?int $prix=null;
	private ?int $qte=null;
	private ?int $idpanier=null;
	private ?int $produit=null;
	private ?int $local=null;
	

	function __construct(string $imgproduit, string $nomproduit, int $prix, int $qte, int $client,int $produit, int $local){
		
		$this->imgproduit=$imgproduit;
		$this->nomproduit=$nomproduit;
		$this->prix=$prix;
		$this->qte=$qte;
		$this->client=$client;
		$this->produit=$produit;
		$this->local=$local;
	
	}
	
	function getimgproduit(): string{
		return $this->imgproduit;
	}
	function getnomproduit(): string{
		return $this->nomproduit;
	}
	function getprix():int{
		return $this->prix;
	}
	function getqte(): int{
		return $this->qte;
	}
	function getLocal(): int{
		return $this->local;
	}
	function getclient(): int{
		return $this->client;
	}
	
	function getproduit(): int{
		return $this->produit;
	}
	
	
	
	
	function getidpanier(): int{
		return $this->idpanier;
	}
	
	function setnomproduit(string $nomproduit): void
	{
		$this->nomproduit=$nomproduit;
	}
	
	function setimgproduit(string $imgproduit): void
	{
		$this->imgproduit=$imgproduit;
	}
	function setclient(int $client): void
	{
		$this->client=$client;
	}
	function setidpanier(int $idpanier): void
	{
		$this->idpanier=$idpanier;
	}
		function setprix(int $prix): void
		{
		$this->prix=$prix;
	}
		function setqte(int $qte): void 
		{
		$this->qte=$qte;
	}

	function setproduit(int $produit): void
	{
		$this->produit=$produit;
	}
	

	
}

?>
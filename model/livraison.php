<?PHP
class livraison{
	private ?string $prenom= null;
	private ?int $id= null;
	private ?string $etat= null;
	private ?float $frais_livraison= null;
	
	private ?int $local= null;
	private  ?int $client= null;

    
	function __construct(int $client,string $etat,float $frais_livraison,int $local){

		$this->frais_livraison=$frais_livraison;
		$this->local=$local;
		$this->client=$client;
		$this->etat=$etat;
	
	}
	function getid(): int{
		return $this->id;
	}

	
	function getclient(): int{
		return $this->client;
	}
	function getetat(): string{
		return $this->etat;
	}
	function getfrais_livraison(): float{
		return $this->frais_livraison;
	}
	function getlocal(): int{
		return $this->local;
	}




}



?>
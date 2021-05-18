<?PHP
class commande{

	private ?int $id_commande= null;
	private ?float $prix_tot= null;
	private ?int $client= null;
	private ?string $etat= null;
	private ?string $nomproduit= null;
	private ?int $qte= null;
	

	function __construct(int $client,float $prix_tot,string $etat,string $nomproduit,int $qte){
	
		$this->client=$client;
		$this->prix_tot=$prix_tot;
		$this->etat=$etat;
		$this->nomproduit=$nomproduit;
		$this->qte=$qte;
		
	
	}
	function getqte(): int{
		return $this->qte;
	}

	
	function getprix_tot(): float{
		return $this->prix_tot;
	}
	function getnomproduit(): string{
		return $this->nomproduit;
	}
	function getid_commande(): int{
		return $this->id_commande;
	}
	function getclient(): int{
		return $this->client;
	}

	function getetat() : string{
		return $this->etat;
	}



	
}




?>
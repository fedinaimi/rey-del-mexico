<?PHP

	class livraison
    {
		private ?int $id= null;
		private ?string $libelle = null;
		private ?float $frais_livraison = null;	
		private ?int $local = null;	
		private ?int $commande= null;
		private ?int $client= null;
		private ?int $statut = null;

		function __construct(string $libelle, float $frais_livraison,int $local, int $commande, int $client, int $statut)
        {
			$this->libelle=$libelle;
			$this->frais_livraison=$frais_livraison;
			$this->local=$local;
			$this->commande=$commande;
			$this->client=$client;
			$this->statut=$statut;
		}

		function getId(): int{
			return $this->id;
		}

		function getLibelle(): string{
			return $this->libelle;
		}

		function getClient(): int{
			return $this->client;
		}

		function getStatut(): int{
			return $this->statut;
		}

		function getCommande(): int{
			return $this->commande;
		}

		function getLocal(): int{
			return $this->local;
		}

		function getFrais(): float{
			return $this->frais_livraison;
		}
		
		function setLocal(int $local): void
        {
			$this->local=$local;
		}

		function setClient(int $client): void
        {
			$this->client=$client;
		}

		function setStatut(int $statut): void
        {
			$this->statut=$statut;
		}

		function setLibelle(string $libelle): void
        {
			$this->libelle=$libelle;
		}

		function setCommande(int $commande): void
        {
			$this->commande=$commande;
		}

		function setFrais(float $frais_livraison): void
        {
			$this->frais_livraison=$frais_livraison;
		}
		
    }

	
?>
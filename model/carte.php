<?PHP
	class carte
    {
		private ?int $id_carte= null;
		private ?int $points = null;
		private ?int $client = null;	
		private ?int $statut = null;	
		private ?string $dateCreation = null;	
		function __construct( int $points, int $client, int $statut,string $dateCreation)
        {
			$this->points=$points;
			$this->client=$client;
			$this->statut=$statut;
			$this->dateCreation=$dateCreation;
		
		}
		function getIdCarte(): int{
			return $this->id_carte;
		}
		function getPoints(): int{
			return $this->points;
		}
		function getClient(): int{
			return $this->client;
		}
		function getStatut(): int{
			return $this->statut;
		}
		function getDate(): string{
			return $this->dateCreation;
		}
		
		function setPoints(int $points): void
        {
			$this->points=$points;
		}
		function setClient(int $client): void
        {
			$this->client=$client;
		}
		function setStatut(int $statut): void
        {
			$this->statut=$statut;
		}
		function setDate(string $dateCreation): void
        {
			$this->dateCreation=$dateCreation;
		}
		
    }
?>
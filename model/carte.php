<?PHP
	class carte
    {
		private ?int $id_carte= null;
		private ?int $points = null;
		private ?int $statut = null;	
		private ?string $dateCreation = null;	
		function __construct( int $points,  int $statut,string $dateCreation)
        {
			$this->points=$points;
			$this->statut=$statut;
			$this->dateCreation=$dateCreation;
		
		}
		function getIdCarte(): int{
			return $this->id_carte;
		}
		function getPoints(): int{
			return $this->points;
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
<?PHP
	class local
    {
		private ?int $id_local = null;
		private ?string $adresse = null;
		private ?int $nbTables= null;
		private ?int $nbChaises = null;
		private ?float $surface = null;
		private ?string $libelle = null;
		private ?int $tel = null;	
		private ?string $dateCreation = null;	
	
		function __construct( string $adresse, int $nbTables, int $nbChaises,float $surface, string $libelle, int $tel, string $dateCreation )
        {
			$this->nbChaises=$nbChaises;
			$this->nbTables=$nbTables;
			$this->surface=$surface;
			$this->adresse=$adresse;
			$this->libelle=$libelle;
			$this->tel=$tel;
			$this->dateCreation=$dateCreation;
		}
		function getIdLocal(): int{
			return $this->id_local;
		}
		function getTel(): int{
			return $this->tel;
		}
		function getAdresse(): string{
			return $this->adresse;
		}
		function getDate(): string{
			return $this->dateCreation;
		}
		function getLibelle(): string{
			return $this->libelle;
		}
		
		function getNbTables(): int{
			return $this->nbTables;
		}
		function getNbChaises(): int{
			return $this->nbChaises;
		}
		function getSurface(): float{
			return $this->surface;
		}
		function setAdresse(string $adresse): void
        {
			$this->adresse=$adresse;
		}
		function setDate(string $dateCreation): void
        {
			$this->dateCreation=$dateCreation;
		}
		function setNbTables(int $nbTables): void
        {
			$this->nbTables=$nbTables;
		}
		function setTel(int $tel): void
        {
			$this->tel=$tel;
		}
		function setNbChaises(int $nbChaises): void
        {
			$this->nbChaises=$nbChaises;
		}
		function setSurface(float $surface): void
        {
			$this->surface=$surface;
		}
		function setLibelle(string $libelle): void
        {
			$this->libelle=$libelle;
		}
		
    }
?>
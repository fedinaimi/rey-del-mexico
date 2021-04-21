<?PHP
	class local
    {
		private ?int $id_local = null;
		private ?string $adresse = null;
		private ?int $nbTables= null;
		private ?int $nbChaises = null;
		private ?float $surface = null;
		private ?string $libelle = null;	
	
		function __construct( string $adresse, int $nbTables, int $nbChaises,float $surface, string $libelle )
        {
			$this->nbChaises=$nbChaises;
			$this->nbTables=$nbTables;
			$this->surface=$surface;
			$this->adresse=$adresse;
			$this->libelle=$libelle;
			
		}
		function getIdLocal(): int{
			return $this->id_local;
		}
		function getAdresse(): string{
			return $this->adresse;
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
		function setNbTables(int $nbTables): void
        {
			$this->nbTables=$nbTables;
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
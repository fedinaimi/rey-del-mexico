<?PHP
	class materiel
    {
		private ?int $id_materiel = null;
		private ?string $libelle = null;
		private ?string $date_achat= null;
		private ?int $local = null;	
		private ?int $nbPieces = null;	
		function __construct( string $libelle, string $date_achat, int $local, int $nbPieces)
        {
			$this->libelle=$libelle;
			$this->date_achat=$date_achat;
			$this->local=$local;
			$this->nbPieces=$nbPieces;
		}
		function getId_materiel(): int{
			return $this->id;
		}
		function getNbPieces(): int{
			return $this->nbPieces;
		}
		function getLibelle(): string{
			return $this->libelle;
		}
		function getDate_achat(): string{
			return $this->date_achat;
		}
		function getLocal(): int{
			return $this->local;
		}
		function setId_materiel(string $id_materiel): void
        {
			$this->id_materiel=$id_materiel;
		}
		function setLibelle(string $libelle): void
        {
			$this->libelle=$libelle;
		}
		function setDate_achat(string $date_achat): void
        {
			$this->date_achat=$date_achat;
		}
		function setLocal(int $local): void
        {
			$this->local=$local;
		}
    }
?>
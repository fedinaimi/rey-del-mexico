<?PHP
	class categorie
    {
		private ?int $id_categorie= null;
		private ?string $libelle = null;	
		function __construct( string $libelle)
        {
			$this->libelle=$libelle;
            
		}
		function getId_Categorie(): int{
			return $this->id_categorie;
		}
		function getLibelle(): string{
			return $this->libelle;
		}
		
		function setLibelle(string $libelle): void
        {
			$this->libelle=$libelle;
		}
    }
?>
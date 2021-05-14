<?PHP
	class categorieChef
    {
		private ?int $id= null;
		private ?string $libelle = null;	
		function __construct( string $libelle)
        {
			$this->libelle=$libelle;
            
		}
		function getId_CategorieChef(): int{
			return $this->id;
		}
		function getLibelleChef(): string{
			return $this->libelle;
		}
		
		function setLibelleChef(string $libelle): void
        {
			$this->libelle=$libelle;
		}
    }
?>
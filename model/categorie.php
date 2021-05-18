<?PHP
	class categorie
    {
		private $id_categorie= null;
		private  $libelle = null;	
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
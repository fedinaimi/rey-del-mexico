<?PHP
	class produit
    {
		private ?int $id = null;
		private ?string $libelle = null;
		private ?float $nb_calories= null;
		private ?string $description = null;
		private ?float $prix = null;
		private ?int   $categorie = null;	
		private ?int $fournisseur = null;	
		private ?string $img = null;	
		function __construct( string $libelle, float $nb_calories, float $prix,string $description,int $categorie,int $fournisseur, string $img)
        {
			$this->libelle=$libelle;
			$this->nb_calories=$nb_calories;
			$this->description=$description;
			$this->prix=$prix;
			$this->categorie=$categorie;
			$this->fournisseur=$fournisseur;
			$this->img=$img;
		}
		function getId(): int{
			return $this->id;
		}
		function getImg(): string{
			return $this->img;
		}
		function getLibelle(): string{
			return $this->libelle;
		}
		function getNb_calories(): float{
			return $this->nb_calories;
		}
		function getDescription(): string{
			return $this->description;
		}
		function getPrix(): float{
			return $this->prix;
		}
		function getCategorie(): int{
			return $this->categorie;
		}
		function getFournisseur(): int{
			return $this->fournisseur;
		}
		function setlibelle(string $libelle): void
        {
			$this->libelle=$libelle;
		}
		function setImg(string $img): void
        {
			$this->img=$img;
		}
		function setNb_calories(float $nb_calories): void
        {
			$this->nb_calories=$nb_calories;
		}
		function setDescription(string $description): void
        {
			$this->description=$description;
		}
		function setPrix(float $prix): void
        {
			$this->prix=$prix;
		}
		function setCategorie(int $categorie): void
        {
			$this->categorie=$categorie;
		}
		function setFournisseur(int $fournisseur): void
        {
			$this->fournisseur=$fournisseur;
		}
    }
?>
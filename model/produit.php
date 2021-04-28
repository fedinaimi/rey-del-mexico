<?PHP



	class produit
    {
		private ?string $id= null;
		private ?string $libelle = null;
		private ?int $prix= null;
		private ?string $description = null;
		private ?int $nb_calories = null;
        private ?string $categorie = null;
        private ?string $fournisseur = null;

		function __construct( string $id, string $libelle, int $prix,string $description, int $nb_calories, string $categorie, string $fournisseur )
        {
			$this->id=$id;
			$this->libelle=$libelle;
			$this->prix=$prix;
			$this->description =$description;
	        $this->nb_calories=$nb_calories;
            $this->categorie=$categorie;
            $this->fournisseur=$fournisseur;
		}
		function getid(): string{
			return $this->id;
		}
		function getlibelle(): string{
			return $this->libelle;
		}
		function getprix(): int{
			return $this->prix;
		}
		function getdescription(): string{
			return $this->description;
		}
		
		function getnb_calories(): int{
			return $this->nb_calories;
		}
        function getcategorie(): string{
			return $this->categorie;
		}
        function getfournisseur(): string{
			return $this->fournisseur;
		}
		function setid(string $id): void
        {
			$this->id=$id;
		}
		function setlibelle(string $libelle): void
        {
			$this->libelle=$libelle;
		}
		function setprix(int $prix): void
        {
			$this->prix=$prix;
		}
		function setdescription(string $description): void
        {
			$this->description=$description;
		}
		
		function setnb_calories(int $nb_calories): void
        {
			$this->nb_calories=$nb_calories;
		}
        function setcategorie(string $categorie): void
        {
			$this->categorie=$categorie;
		}
        function setfournisseur(string $fournisseur): void
        {
			$this->fournisseur=$fournisseur;
		}

    }
?>
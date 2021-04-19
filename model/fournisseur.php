<?PHP
	class fournisseur
    {
		private ?int $id_fournisseur = null;
		private ?string $nom_fournisseur = null;
		private ?string $prenom_fournisseur= null;
		private ?string $email = null;
		private ?int $tel = null;	
		private ?int $categorie = null;	
		private ?int $local = null;	
		function __construct( string $nom_fournisseur, string $prenom_fournisseur, string $email,int $tel,int $categorie,int $local)
        {
			$this->nom_fournisseur=$nom_fournisseur;
			$this->prenom_fournisseur=$prenom_fournisseur;
			$this->email=$email;
			$this->tel=$tel;
			$this->categorie=$categorie;
			$this->local=$local;
		}
		
		function getidFournisseur(): int{
			return $this->id_fournisseur;
		}
		function getNom(): string{
			return $this->nom_fournisseur;
		}
		function getPrenom(): string{
			return $this->prenom_fournisseur;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getTel(): int{
			return $this->tel;
		}
		function getCategorie(): int{
			return $this->categorie;
		}
		function getLocal(): int{
			return $this->local;
		}


		function setNom(string $nom_fournisseur): void
        {
			$this->nom_fournisseur=$nom_fournisseur;
		}
		function setPrenom(string $prenom_fournisseur): void
        {
			$this->prenom_fournisseur=$prenom_fournisseur;
		}
		function setEmail(string $email): void
        {
			$this->email=$email;
		}
		function setTel(int $tel): void
        {
			$this->tel=$tel;
		}
		function setCategorie(int $categorie): void
        {
			$this->categorie=$categorie;
		}
		function setLocal(int $local): void
        {
			$this->local=$local;
		}
    }
?>
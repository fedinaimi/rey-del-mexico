<?PHP
	class fournisseur
    {
		private ?int $id_fournisseur = null;
		private ?string $nom = null;
		private ?string $prenom= null;
		private ?string $email = null;
		private ?int $tel = null;	
		private ?int $categorie = null;	
		private ?int $local = null;	
		function __construct( string $nom, string $prenom, string $email,int $tel,int $categorie,int $local)
        {
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->tel=$tel;
			$this->categorie=$categorie;
			$this->local=$local;
		}
		function getIdFournisseur(): int{
			return $this->id_fournisseur;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
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
		function setNom(string $nom): void
        {
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void
        {
			$this->prenom=$prenom;
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
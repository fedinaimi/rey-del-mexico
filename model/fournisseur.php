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
		private ?string $img= null;
		function __construct( string $nom, string $prenom, string $email,int $tel,int $categorie,int $local, string $img)
        {
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->tel=$tel;
			$this->categorie=$categorie;
			$this->local=$local;
			$this->img=$img;
		}
		function getIdFournisseur(): int{
			return $this->id_fournisseur;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getImg(): string{
			return $this->img;
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
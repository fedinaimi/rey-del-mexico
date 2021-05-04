<?PHP
	class chef
    {
		private ?int $id = null;
		private ?string $nom = null;
		private ?string $prenom= null;
		private ?string $email = null;
		private ?string $adresse = null;
		private ?string $dateNais = null;	
		private ?string $categories = null;	
		private ?int $local = null;	
		private ?string $img = null;	
		private ?string $fb = null;	
		function __construct( string $nom, string $prenom, string $email,string $adresse, string $dateNais ,string $categories,int $local, string $img , string $fb)
        {
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->adresse=$adresse;
			$this->dateNais=$dateNais;
			$this->categories=$categories;
			$this->local=$local;
			$this->img=$img;
			$this->fb=$fb;
		}
		function getIdChef(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getImg(): string{
			return $this->img;
		}
		function getFb(): string{
			return $this->fb;
		}

		function getEmail(): string{
			return $this->email;
		}
		function getAdresse(): string{
			return $this->adresse;
		}
		function getDateNais(): string{
			return $this->dateNais;
		}
		function getCategories(): string{
			return $this->categories;
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
		function setImg(string $img): void
        {
			$this->img=$img;
		}
		function setFb(string $fb): void
        {
			$this->fb=$fb;
		}
		function setEmail(string $email): void
        {
			$this->email=$email;
		}
		function setAdresse(string $adresse): void
        {
			$this->adresse=$adresse;
		}
		function setDateNais(string $dateNais): void
        {
			$this->dateNais=$dateNais;
		}
		function setCategories(string $categories): void
        {
			$this->categories=$categories;
		}
		function setLocal(int $local): void
        {
			$this->local=$local;
		}
    }
?>
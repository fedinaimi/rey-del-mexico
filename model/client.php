<?PHP
	class client
    {
		private ?int $id_client = null;
		private ?string $nom = null;
		private ?string $prenom= null;
		private ?string $dateNais = null;
		private ?string $cin = null;	
		private ?string $email = null;
		private ?string $mdp = null;	
		private ?int $reduction = null;	
		private ?int $carte= null;		
		function __construct( string $nom, string $prenom, string $dateNais, string $cin,string $email,string $mdp,int $reduction,int $carte)
        {
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->dateNais=$dateNais;
			$this->email=$email;
			$this->mdp=$mdp;
			$this->cin=$cin;
			$this->reduction=$reduction;
			$this->carte=$carte;
		}
		function getIdClient(): int{
			return $this->id_client;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getDateNais(): string{
			return $this->dateNais;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getMdp(): string{
        return $this->mdp;
		}	
		function getCin(): string{
			return $this->cin;
		}
		function getReduction(): int{
			return $this->reduction;
		}
		function getCarte(): int{
			return $this->carte;
		}
		function setNom(string $nom): void
        {
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void
        {
			$this->prenom=$prenom;
		}
		function setDateNais(string $dateNais): void
        {
			$this->dateNais=$dateNais;
		}
		function setEmail(string $email): void
        {
			$this->email=$email;
		}
		function setMdp(string $mdp): void
		{
			$this->mdp=$mdp;
		}
		function setCin(string $cin): void
        {
			$this->cin=$cin;
		}
		function setReduction(int $reduction): void
        {
			$this->reduction=$reduction;
		}
		function setCarte(int $carte): void
        {
			$this->carte=$carte;
		}
    }
   

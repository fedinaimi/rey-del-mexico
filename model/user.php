<?PHP
	class user
    {
	
		private ?int $cin = null;
		private ?string $adresse = null;
		private ?string $login_user= null;
		private ?int $mdp_user = null;
		
		  function __construct(string $login_user, int $mdp_user)
		  {
			 
			  $this->login_user=$login_user;
			  $this->mdp_user=$mdp_user;
			  
		   }
		function getCIN(): int{
			return $this->cin;
		}
		function getAdresse(): string{
			return $this->adresse;
		}
		function getLoginUser(): string{
			return $this->login_user;
		}
		function getMdp(): int{
			return $this->mdp_user;
		}
		
		
		function setCin(int $cin): void
        {
			$this->cin=$cin;
		}
		function setAdresse(string $adresse): void
        {
			$this->adresse=$adresse;
		}
		function setLoginUser(string $login): void
        {
			$this->login_user=$login;
		}
		function setMdp(int $mdp_user): void
        {
			$this->mdp_user=$mdp_user;
		}
		
    }
?>
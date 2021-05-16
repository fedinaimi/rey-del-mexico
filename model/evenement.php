<?PHP
	class evenement
    {
		private ?int $id= null;
		private ?string $img = null;
		private ?string $libelle = null;
		private ?string $date= null;
		private ?int $duree = null;	
		private ?string $description = null;
		private ?int $local = null;	
		function __construct(  string $img,string $libelle,string $date,int $duree,string $description,int  $local)
        {
			$this->img=$img;
			$this->libelle=$libelle;
			$this->date=$date;
			$this->duree=$duree;
			$this->description =$description;
	        $this->local=$local;
		}
		function getid(): int{
			return $this->id;
		}
		function getimg(): string{
			return $this->img;
		}
		function getlibelle(): string{
			return $this->libelle;
		}
		function getdate(): string{
			return $this->date;
		}
		function getduree(): int{
			return $this->duree;
		}
		function getdescription(): string{
			return $this->description;
		}
		
		function getlocal(): int{
			return $this->local;
		}
		function setid(int $id): void
        {
			$this->id=$id;
		}
		function setimg(string $img): void
        {
			$this->img=$img;
		}
		function setlibelle(string $libelle): void
        {
			$this->libelle=$libelle;
		}
		function setdate(string $date): void
        {
			$this->date=$date;
		}
		function setduree(int $duree): void
        {
			$this->duree=$duree;
		}
		function setdescription(string $description): void
        {
			$this->description=$description;
		}
		
	
		function setlocal(int $local): void
        {
			$this->local=$local;
		}
    }
?>
<?PHP
	class reservation
    {
		private ?int $id_reservation= null;
		private ?string $date = null;
		private ?int $nb_perso= null;
		private ?string $message = null;
        private ?int $statut = null;
		private ?int $client = null;
        private ?int $local = null;	
		function __construct(string $date, int $nb_perso,string $message,int $statut,int $client,int $local)
        {
			
			
			$this->date=$date;
			$this->nb_perso=$nb_perso;
			$this->message=$message;
            $this->statut=$statut;
            $this->client=$client;
            $this->local=$local;
        }
		function getid_reservation(): int{
			return $this->id_reservation;
		}
		function getdate(): string{
			return $this->date;
		}
		function getnb_perso(): int{
			return $this->nb_perso;
		}
		function getmessage(): string{
			return $this->message;
		}
        function getstatut(): string{
			return $this->statut;
		}
		
		function getclient(): int{
			return $this->client;
		}
        function getLocal(): int{
			return $this->local;
		}
       
		function setid_reservation(int $id_reservation): void
        {
			$this->id_reservation=$id_reservation;
		}
		function setdate(string $date): void
        {
			$this->date=$date;
		}
		function setnb_perso(int $nb_perso): void
        {
			$this->nb_perso=$nb_perso;
		}
		function setmessage(string $message): void
        {
			$this->message=$message;
		}
        function setstatut(int $statut): void
        {
			$this->statut=$statut;
		}
        function setclient(int $client): void
        {
			$this->client=$client;
		}
		
	
		function setLocal(int $local): void
        {
			$this->local=$local;
		}
    }
?>
<?PHP
	class reclamation
    {
		private ?int $id_reclamation= null;
		private ?string $message = null;
		private ?string $sujet = null;
		private ?int $statut = null;	
		private ?int $client = null;	
		
		function __construct(string $message, string $sujet, int $statut, int $client)
        {
			
			
			$this->message=$message;
			$this->sujet=$sujet;
			$this->statut=$statut;
			$this->client=$client;
    
        }
		function getIdReclamation(): int{
			return $this->id_reclamation;
		}
		function getMessage(): string{
			return $this->message;
		}
		function getSujet(): string{
			return $this->sujet;
		}
		function getStatut(): int{
			return $this->statut;
		}
        function getClient(): int{
			return $this->client;
		}
		
       
		function setIdReclamation(int $id_reclamation): void
        {
			$this->id_reclamation=$id_reclamation;
		}
		function setMessage(string $message): void
        {
			$this->message=$message;
		}
		function setSubject(string $subject): void
        {
			$this->sujet=$subject;
		}
		function setStatut(string $statut): void
        {
			$this->statut=$statut;
		}
        function setClient(int $client): void
        {
			$this->client=$client;
		}
       
    }
?>
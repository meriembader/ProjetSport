
<?php

	class Medecin
	{  
		public $idM;
		public $nom;
		public $prenom;
		public $age;
		public $departement;
		private $telephone;
	
		
		function __construct($idM,$nom,$prenom,$age,$departement,$telephone)
		{
			$this->idM=$idM;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->age=$age;
			$this->departement=$departement;
			$this->telephone=$telephone;
			
		}

		function getIdM(){
			return $this->idM;
		}
		function getNom(){
			return $this->nom;
		}
		function getPrenom(){
			return $this->prenom;
		}
		function getAge(){
			return $this->age;
		}
		function getDepartement(){
			return $this->departement;
		}
		function getTelephone(){
			return $this->telephone;
		}
		

		function setIdM($idM){
			$this->idM=$idM;
		}
		function setNom($nom){
			$this->nom=$nom;
		}
		function setPrenom($prenom){
			$this->prenom=$prenom;
		}
		function setAge($age){
			$this->age=$age;
		}
		function setDepartement($departement){
			$this->departement=$departement;
		}
		function setTelephone($telephone){
			$this->telephone=$telephone;
		}
		
	}

  ?>

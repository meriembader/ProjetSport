chambre.php


<?php
	/**
	* 
	*/
class Reclamation
	{
		public $idchambre;
		public $etage;
		public $etat;
		public $date2;
		
		function __construct($idchambre,$etage,$etat,$date2)
		{
			$this->idchambre=$idchambre;
			$this->etage=$etage;
			$this->etat=$etat;
			$this->date2=$date2;
			

		}

		function getIdchambre(){
			return $this->idchambre;
		}
		function getEtage(){
			return $this->etage;
		}
		function getdEtat(){
			return $this->etat;
		}
		function getDate2(){
			return $this->date2;
		}
		

		function setIdchambre($idchambre){
			$this->idchambre=$idchambre;
		}
		function setEtage($etage){
			$this->etage=$etage;
		}
		function setEtat($etat){
			$this->etat=$etat;
		}
		function setDate2($date2){
			$this->date2=$date2;
		}


		
	
	}

  ?>
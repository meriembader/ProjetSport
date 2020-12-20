<?php
	/**
	* 
	*/
class Reclamation
	{
		public $idoccupation;
		public $idpatient;
		public $idchambre;
		public $date1;
		
		function __construct($idchambre,$etage,$etat)
		{
			$this->idoccupation=$idoccupation;
			$this->idpatient=$idpatient;
			$this->idchambre=$idchambre;
			$this->date1=$date1;

			

		}

		function getIdoccupation(){
			return $this->idoccupation;
		}
		function getIdpatient(){
			return $this->idpatient;
		}
		function getIdchambre(){
			return $this->idchambre;
		}
		function getDate1(){
			return $this->date1;
		}
		

		function setIdoccupation($idoccupation){
			$this->idoccupation=$idoccupation;
		}
		function setIdpatient($idpatient){
			$this->idpatient=$idpatient;
		}
		function setIdchambre($idchambre){
			$this->idchambre=$idchambre;
		}

		function setDate1($date1){
			$this->date1=$date1;
		}
		
	
	}

  ?>
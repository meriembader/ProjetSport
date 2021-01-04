<?php
	class Promo{

	    private  $id_promo = null;
        private  $description_promo;
        private  $date_debut;
        private  $date_fin;
        private  $id_pack;
        private  $statut_promo = null;

		
		public function __construct($description_promo,$date_debut,$date_fin,$id_pack)
		{
            $this->description_promo=$description_promo;
            $this->date_debut=$date_debut;
            $this->date_fin=$date_fin;
            $this->id_pack=$id_pack;

        }

       			 /* les fonctions GETTERS */

		public function getIdPromo(){
			return $this->id_promo;
        }
        
		public function getDescriptionPromo(){
			return $this->description_promo;
		}
		public function getDateDebut(){
			return $this->date_debut;
		}
        public function getDateFin(){
			return $this->date_fin;
		}
		 public function getIdPack(){
			return $this->id_pack;
		}
        public function getStatutPromo(){
			return $this->statut_promo;
		}

 					/* les fonctions SETTERS*/

        public function setIdPromo($id_promo){
			$this->id_promo=$id_promo;
		}
		public function setDescriptionPromo($description_promo){
			$this->description_promo=$description_promo;
		}
		public function setDateDebut($date_debut){
			$this->date_debut=$date_debut;
        }
        public function setDateFin($date_fin){
			$this->date_fin=$date_fin;
        }
		public function setIdPack($id_pack){
			$this->id_pack=$id_pack;
        }
        public function setStatutPromo($statut_promo){
			$this->statut_promo=$statut_promo;
        }
}


?>
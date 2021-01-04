<?php
	class Pack{

	    private  $id_pack = null;
        private  $nom_pack;
        private  $description_pack;
        private  $prix_pack;
		
		public function __construct($nom_pack,$description_pack, $prix_pack)
		{
            $this->nom_pack=$nom_pack;
            $this->description_pack=$description_pack;
            $this->prix_pack=$prix_pack;
        }

       			 /* les fonctions GETTERS */

		public function getIdPack(){
			return $this->id_pack;
        }
        
		public function getNomPack(){
			return $this->nom_pack;
		}
		public function getDescriptionPack(){
			return $this->description_pack;
		}
        public function getPrixPack(){
			return $this->prix_pack;
		}



 					/* les fonctions SETTERS*/

        public function setIdPack($id_pack){
			$this->id_pack=$id_pack;
		}
		public function setNomPack($nom_pack){
			$this->nom_pack=$nom_pack;
		}
		public function setDescriptionPack($description_pack){
			$this->description_pack;
        }
        public function setPrixPack($prix_pack){
			$this->prix_pack=$prix_pack;
        }

}

?>
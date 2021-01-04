<?php

	class Panier{



	    private  $id_panier = null;
        private  $reference_produit;
        private  $id;
        private  $quantite = null;
        private  $statut = null;
        private  $prix_produit;
		
		public function __construct($reference_produit,$id,$prix_produit)
		{
            $this->reference_produit=$reference_produit;
            $this->id=$id;
            $this->prix_produit=$prix_produit;
        }

       			 /* les fonctions GETTERS */

		public function getIdPanier(){
			return $this->id_panier;
        }
        
		public function getReference(){
			return $this->reference_produit;
		}
		public function getQuantite(){
			return $this->quantite;
		}
		public function getId(){
			return $this->id;
		}
		public function getStatut(){
			return $this->statut;
		}
        public function getPrixProduit(){
			return $this->prix_produit;
		}

 					/* les fonctions SETTERS*/

        public function setIdPanier($id_panier){
			$this->id_panier=$id_panier;
		}
		public function setReference($reference_produit){
			$this->reference=$reference_produit;
		}
		public function setId($id){
			$this->id=$id;
        }
		public function setQuantite($quantite){
			$this->quantite=$quantite;
        }
		public function setStatut($statut){
			$this->statut=$statut;
        }
        public function setPrixProduit($prix_produit){
			$this->prix_produit=$prix_produit;
        }

}

?>
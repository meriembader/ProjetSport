<?php

	class Panier{

	    private  $id_panier = null;
        private  $reference;
        private  $id;
        private  $quantite = null;
        private  $statut = null;
        private  $prix_produit;
		
		public function __construct($reference,$id,$prix_produit)
		{
            $this->reference=$reference;
            $this->id=$id;
            $this->prix_produit=$prix_produit;
        }

       			 /* les fonctions GETTERS */

		public function getIdPanier(){
			return $this->id_panier;
        }
        
		public function getReference(){
			return $this->reference;
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
        public function getPrixPanier(){
			return $this->prix_panier;
		}

 					/* les fonctions SETTERS*/

        public function setIdPanier($id_panier){
			$this->id_panier=$id_panier;
		}
		public function setReference($reference){
			$this->reference=$reference;
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
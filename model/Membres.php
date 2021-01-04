<?php
    class Membres{
        private $id =null;
        private $nom ;
        private $prenom ;
        private $sexe ;
        private $taille;
        private $poids;
        //private $imc ;
        private $adresse;
         private $mail;
        private $date_naissance;
        private $mdp;
        private $telephone ;
        
       
        
        
        public function __construct($nom,$prenom,$sexe,$taille,$poids,$adresse,$mail,$date_naissance,$mdp,$telephone){
            $this->nom=$nom;
            $this->prenom=$prenom;
             $this->sexe=$sexe;
            $this->taille=$taille;
            $this->poids=$poids;
             //$this->imc=$imc;
             $this->adresse=$adresse;
             $this->mail=$mail;
            $this->date_naissance=$date_naissance;
           
            
             $this->mdp=$mdp;
            $this->telephone=$telephone;
           
        }
        public function getid(){
            return $this->id;
        }
        
        public function getnom(){
            return $this->nom;
        }
        public function getprenom(){
            return $this->prenom;
        }
        public function getsexe(){
            return $this->sexe;
        }
        public function gettaille(){
            return $this->taille;
        }
        public function getpoids(){
            return $this->poids;
        }

        /* public function getimc(){
            return $this->imc;
        }*/
      
         
        public function getadresse(){
            return $this->adresse;
        }
        public function getmail(){
            return $this->mail;
        }
          public function getdate_naissance(){
            return $this->date_naissance;
        }
         public function getmdp(){
            return $this->mdp;
        }
        public function gettelephone(){
            return $this->telephone;
        }
       


        public function setid($id){
            $this->id=$id;
        }
        public function setnom($nom){
            $this->nom=$nom;
        }
        public function setprenom($prenom){
            $this->prenom=$prenom;
        }


         public function setsexe(){
            $this->sexe=$sexe;
        }
        public function settaille(){
            $this->taille=$taille;
        }
        public function setpoids(){
            $this->poids=$poids;
        }

       /* public function setimc(){
            $this->imc=$imc;
        }*/
    
        
        public function setadresse(){
            $this->adresse=$adresse;
        }
        public function setmail($email){
            $this->mail=$mail;
        }
         public function setdate_naissance(){
            $this->date_naissance=$date_naissance;
        }
        public function setmdp($mdp){
            $this->mdp=$mdp;
        }
        public function settelephone($telephone){
            $this->telephone=$telephone;
        }
        
}

?>
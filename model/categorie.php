
<?php

class categorie
{  
    public $idCat;
    public $nom;
    private $chemin_img;

    
    
    function __construct($idCat,$nom,$chemin_img)
    {
        $this->idCat=$idCat;
        $this->nom=$nom;
        $this->chemin_img=$chemin_img;
      
       
        
    }

    function getIdCat(){
        return $this->idCat;
    }
    function getNom(){
        return $this->nom;
    }

    function getChemin_img(){
        return $this->chemin_img;
    }

    

    function setIdCat($idCat){
        $this->idCat=$idCat;
    }
    function setNom($nom){
        $this->nom=$nom;
    }
  
    function setChemin_img($chemin_img){
        $this->chemin_img=$chemin_img;
    }
   
  
}

?>

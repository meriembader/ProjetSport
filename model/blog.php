
<?php

class blog
{  
    public $idB;
    public $titre;
    public $description;
    private $chemin_img;

    public $idM;
    public $date;
    
    
    function __construct($idB,$titre,$description,$chemin_img,$idM,$date)
    {
        $this->idB=$idB;
        $this->titre=$titre;
        $this->description=$description;
        $this->chemin_img=$chemin_img;
        $this->idM=$idM;
        $this->date=$date;
       
        
    }

    function getIdB(){
        return $this->idB;
    }
    function getTitre(){
        return $this->titre;
    }
    function getDescription(){
        return $this->description;
    }
    function getChemin_img(){
        return $this->chemin_img;
    }
    function getIdM(){
        return $this->idM;
    }
    function getDate(){
        return $this->date;
    }

    

    function setIdB($idB){
        $this->idB=$idB;
    }
    function setTitre($titre){
        $this->titre=$titre;
    }
    function setDescription($description){
        $this->description=$description;
    }
    function setChemin_img($chemin_img){
        $this->chemin_img=$chemin_img;
    }
    
    function setIdM($idM){
        $this->idM=$idM;
    }
    function setDate($date){
        $this->date=$date;
    }
  
}

?>

<?php


  class config {
    private static $pdo = NULL;   

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=projet', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessidM());
        }
      }
      return self::$pdo;
    }   
  }

	class categorieC
	{
		
		function ajouter($categorie){
			$db = config::getConnexion();
			$sql = "INSERT INTO categorie (?,?,?) VALUES (:idCat,:nom,:chemin_img)";
			try {
				$req = $db->prepare($sql);
			$req->bindValue(':idCat',$categorie->getIdCat());
            $req->bindValue(':nom',$categorie->getNom());
			$req->bindValue(':chemin_img',$categorie->getChemin_img());
           
			
			
	
			$req->execute();
		}
		catch (Exception $e){
				echo 'Erreur: '.$e->getMessidM();
			}			

		}
		function affichercategorie(){
			$db = config::getConnexion();
			$sql="SELECT * FROM categorie ";
			$liste=$db->query($sql);
			return $liste;
			
		}
		
		function supprimercategorie($idCat){
			$db = config::getConnexion();
			$sql="DELETE FROM categorie where idCat= :idCat";
			$req=$db->prepare($sql);
			$req->bindValue(':idCat',$idCat);
	        $req->execute();
	        
		}
		
	}

		

  ?>
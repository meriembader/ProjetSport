chambreController.php

<?php

class config {
  private static $pdo = NULL;

  public static function getConnexion() {
	if (!isset(self::$pdo)) {
	  try{
		self::$pdo = new PDO('mysql:host=localhost;dbname=projetmedecin', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
		
	  }catch(Exception $e){
		die('Erreur: '.$e->getMessage());
	  }
	}
	return self::$pdo;
  }
}


	class chambreController
	{
		
		function ajouter($chambre){
			$db = config::getConnexion();
			$sql = "INSERT INTO chambre (?,?) VALUES (:etage,:etat)";
			try {
				$req = $db->prepare($sql);
			
			$req->bindValue(':etage',$chambre->getEtage());
			$req->bindValue(':etat',$chambre->getEtat());
	
			$req->execute();
		}
		catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			

		}
		function afficherchambre(){
			$db = config::getConnexion();
			$sql="SELECT * FROM chambre ";
			$liste=$db->query($sql);
			return $liste;
			
		}
		
		
		function supprimerchambre($idchambre){
			$db = config::getConnexion();
			$sql="DELETE FROM chambre where idchambre= :idchambre";
			$req=$db->prepare($sql);
			$req->bindValue(':idchambre',$idchambre);
	        $req->execute();
	        
		}
		
		function modifierchambre($chambre,$idchambre){
			$db = config::getConnexion();
			
			$sql="UPDATE chambre SET etage=:etage,etat=:etat WHERE idchambre=:idchambre";
			try{
				$req=$db->prepare($sql);
				
				$req->bindValue(':etage',$chambre->getEtage());
				$req->bindValue(':etet',$chambre->getEtat());
				
				$s=$req->execute();
			}
			catch(Exception $e){
				echo("Erreur".$e->getMessage());
			}

		}

		function recupererchambre($idchambre){
			
			$sql="SELECT * FROM chambre WHERE idchambre=$idchambre";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->execute();
				
				$chambre = $req->fetch();
				return $chambre;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		
	}

  ?>
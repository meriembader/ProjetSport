occupationController.php

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


	class occupationController
	{
		
		function ajouter($occupation){
			$db = config::getConnexion();
			$sql = "INSERT INTO reservation (?,?,?) VALUES (:idpatient,:idchambre, :date1)";
			try {
				$req = $db->prepare($sql);
			
			$req->bindValue(':idpatient',$occupation->getIdpatient());
			$req->bindValue(':idchambre',$occupation->getIdchambre());
			$req->bindValue(':date1',$occupation->getDate1());

	
			$req->execute();
		}
		catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			

		}
		function afficheroccupation(){
			$db = config::getConnexion();
			$sql="SELECT * FROM reservation ";
			$liste=$db->query($sql);
			return $liste;
			
		}
		
		
		function supprimeroccupation($idoccupation){
			$db = config::getConnexion();
			$sql="DELETE FROM reservation where idoccupation= :idoccupation";
			$req=$db->prepare($sql);
			$req->bindValue(':idoccupation',$idoccupation);
	        $req->execute();
	        
		}
		
		function modifieroccupation($occupation,$idoccupation){
			$db = config::getConnexion();
			
			$sql="UPDATE reservation SET idpatient=:idpatient,idchambre=:idchambre WHERE date1=:date1";
			try{
				$req=$db->prepare($sql);
				
				$req->bindValue(':idpatient',$occupation->getIdpatient());
				$req->bindValue(':idchambre',$occupation->getIdchambre());
				$req->bindValue(':date1',$occupation->getDate1());
				$s=$req->execute();
			}
			catch(Exception $e){
				echo("Erreur".$e->getMessage());
			}

		}

		function recupereroccupation($idoccupation){
			
			$sql="SELECT * FROM reservation WHERE idoccupation=$idoccupation";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->execute();
				
				$chambre = $req->fetch();
				return $occupation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		
	}

  ?>
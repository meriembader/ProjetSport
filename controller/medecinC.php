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

	class medecinC
	{
		
		function ajouter($medecin){
			$db = config::getConnexion();
			$sql = "INSERT INTO medecin (?,?,?,?,?,?) VALUES (:idM,:nom,:prenom,:age,:departement,:telephone)";
			try {
				$req = $db->prepare($sql);
			$req->bindValue(':idM',$medecin->getIdM());
            $req->bindValue(':nom',$medecin->getNom());
            $req->bindValue(':prenom',$medecin->getPrenom());
            $req->bindValue(':age',$medecin->getAge());
			$req->bindValue(':departement',$medecin->getDepartement());
			$req->bindValue(':telephone',$medecin->getTelephone());
	
			$req->execute();
		}
		catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			

		}
		function afficherMedecin(){
			$db = config::getConnexion();
			$sql="SELECT * FROM medecin ";
			$liste=$db->query($sql);
			return $liste;
			
		}

		
		function supprimermedecin($idM){
			$db = config::getConnexion();
			$sql="DELETE FROM medecin where idM= :idM";
			$req=$db->prepare($sql);
			$req->bindValue(':idM',$idM);
	        $req->execute();
	        
		}
		/*function recuperer($idM_sous_categorie){
			$db = config::getConnexion();
			$sql = "SELECT idM FROM medecin WHERE idM_sous_categorie = $idM_sous_categorie";
			$liste=$db->query($sql);
			return $liste;
		}
		
	

		function recuperermedecin(){
			$db = config::getConnexion();
			$sql="SElECT idM,nom,age FROM medecin";
			$liste=$db->query($sql);
			return $liste;
		}*/

		
/*
		function supprimermedecin($idM){
			$db = config::getConnexion();
			$sql="DELETE FROM medecin where idM= :idM";
			$req=$db->prepare($sql);
			$req->bindValue(':idM',$idM);
	        $req->execute();
	        
		}

		function modifiermedecin($medecin,$idM){
			$db = config::getConnexion();
			
			$sql="UPDATE medecin SET nom=:nom,departement=:departement,prenom=:prenom,telephone=:telephone WHERE idM=:idM";
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':departement',$medecin->getdepartement());
				$req->bindValue(':prenom',$medecin->getprenom());
				$req->bindValue(':telephone',$medecin->gettelephone());
				$req->bindValue(':nom',$medecin->getNom());
				$req->bindValue(':idM',$idM);
				$s=$req->execute();
			}
			catch(Exception $e){
				echo("Erreur".$e->getMessage());
			}

		}

		function recuperer_medecin($idM){
			
			$sql="SELECT * FROM medecin WHERE idM=$idM";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->execute();
				
				$medecin = $req->fetch();
				return $medecin;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
/*
		function affichermedecinseloncategorie($catalogue){
			$db = config::getConnexion();
			$sql="SElECT * FROM medecin WHERE nomCatalogue=:catalogue";
			$req=$db->prepare($sql);
			$req->bindValue(':catalogue',$catalogue);
			return $liste;
		}
		
		function reccuperermedecin($idM){
			$db = config::getConnexion();
			$sql="SELECT * from medecin where idM=$idM";
			$liste=$db->query($sql);
			return $liste;
		}
		
		function supprimermedecin($idM){
			$sql1="DELETE FROM image where idM= :idM";
			$sql="DELETE FROM medecin where idM= :idM";
			$db = config::getConnexion();
			$req1=$db->prepare($sql1);
	        $req=$db->prepare($sql);
			$req1->bindValue(':idM',$idM);
			$req->bindValue(':idM',$idM);
	        $req1->execute();
	        $req->execute();
		}
		*/

		
	}

  ?>
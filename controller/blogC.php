<?php


  class config {
    private static $pdo = NULL;   

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=projetmedecin', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessidM());
        }
      }
      return self::$pdo;
    }   
  }

	class blogC
	{
		
		function ajouter($blog){
			$db = config::getConnexion();
			$sql = "INSERT INTO blog (?,?,?,?,?,?) VALUES (:idB,:titre,:description,:idM,:date,:chemin_img)";
			try {
				$req = $db->prepare($sql);
			$req->bindValue(':idB',$blog->getIdB());
            $req->bindValue(':titre',$blog->getTitre());
            $req->bindValue(':description',$blog->getDescription());
            $req->bindValue(':idM',$blog->getIdM());
			$req->bindValue(':date',$blog->getDate());
			$req->bindValue(':chemin_img',$blog->getChemin_img());
	
			$req->execute();
		}
		catch (Exception $e){
				echo 'Erreur: '.$e->getMessidM();
			}			

		}
		function afficherblog(){
			$db = config::getConnexion();
			$sql="SELECT * FROM blog ";
			$liste=$db->query($sql);
			return $liste;
			
		}
		function afficherJoinedBlog(){
			$db = config::getConnexion();
			$sql="SELECT blog.idB, medecin.prenom, blog.titre, blog.description, blog.chemin_img, blog.date FROM blog INNER JOIN medecin ON blog.idM=medecin.idM";
			$liste=$db->query($sql);
			return $liste;
			
		}
		function afficherBlogE(){
			$db = config::getConnexion();
			$sql="SELECT chemin_img, idM, description, date FROM blog ";
			$liste=$db->query($sql);
			return $liste;
			
		}

		
		function supprimerblog($idB){
			$db = config::getConnexion();
			$sql="DELETE FROM blog where idB= :idB";
			$req=$db->prepare($sql);
			$req->bindValue(':idB',$idB);
	        $req->execute();
	        
		}
		/*function recuperer($idB_sous_categorie){
			$db = config::getConnexion();
			$sql = "SELECT idB FROM blog WHERE idB_sous_categorie = $idB_sous_categorie";
			$liste=$db->query($sql);
			return $liste;
		}
		
	

		function recupererblog(){
			$db = config::getConnexion();
			$sql="SElECT idB,titre,idM FROM blog";
			$liste=$db->query($sql);
			return $liste;
		}*/

		
/*
		function supprimerblog($idB){
			$db = config::getConnexion();
			$sql="DELETE FROM blog where idB= :idB";
			$req=$db->prepare($sql);
			$req->bindValue(':idB',$idB);
	        $req->execute();
	        
		}

		function modifierblog($blog,$idB){
			$db = config::getConnexion();
			
			$sql="UPDATE blog SET titre=:titre,date=:date,description=:description,chemin_img=:chemin_img WHERE idB=:idB";
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':date',$blog->getdate());
				$req->bindValue(':description',$blog->getdescription());
				$req->bindValue(':chemin_img',$blog->getchemin_img());
				$req->bindValue(':titre',$blog->gettitre());
				$req->bindValue(':idB',$idB);
				$s=$req->execute();
			}
			catch(Exception $e){
				echo("Erreur".$e->getMessidM());
			}

		}

		function recuperer_blog($idB){
			
			$sql="SELECT * FROM blog WHERE idB=$idB";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->execute();
				
				$blog = $req->fetch();
				return $blog;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessidM());
			}
		}
/*
		function afficherblogseloncategorie($catalogue){
			$db = config::getConnexion();
			$sql="SElECT * FROM blog WHERE titreCatalogue=:catalogue";
			$req=$db->prepare($sql);
			$req->bindValue(':catalogue',$catalogue);
			return $liste;
		}
		
		function reccupererblog($idB){
			$db = config::getConnexion();
			$sql="SELECT * from blog where idB=$idB";
			$liste=$db->query($sql);
			return $liste;
		}
		
		function supprimerblog($idB){
			$sql1="DELETE FROM imidM where idB= :idB";
			$sql="DELETE FROM blog where idB= :idB";
			$db = config::getConnexion();
			$req1=$db->prepare($sql1);
	        $req=$db->prepare($sql);
			$req1->bindValue(':idB',$idB);
			$req->bindValue(':idB',$idB);
	        $req1->execute();
	        $req->execute();
		}
		*/

		
	}

  ?>
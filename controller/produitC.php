
<?php

class config {
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=projet', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }

	/**
	* 
	
		
	*/
	class produitC
	{
		
		function ajouter($produit){
			$db = config::getConnexion();
			$sql = "INSERT INTO produit (?,?,?,?,?,?,?) VALUES (:reference,:nom,:prix,:chemin_img,:quantite_total,:description, :idCat)";
			try {
				$req = $db->prepare($sql);
			$req->bindValue(':reference',$produit->getReference());
			$req->bindValue(':nom',$produit->getNom());
			$req->bindValue(':quantite_total',$produit->getQuantite_total());
			$req->bindValue(':prix',$produit->getPrix());
			$req->bindValue(':description',$produit->getDescription());
			$req->bindValue(':chemin_img',$produit->getChemin_img());
			$req->bindValue(':idCat',$produit->getIdCat());
			$req->execute();
		}
		catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			

		}


		function afficherJoinedcategorie(){
			$db = config::getConnexion();
			$sql="SELECT produit.reference, categorie.nom as nomC, produit.nom, produit.quantite_total, produit.prix, produit.description, produit.chemin_img FROM produit INNER JOIN categorie ON categorie.idCat=produit.idCat";
			$liste=$db->query($sql);
			return $liste;
			
		}
	
		
	
	
		
		function aaficherPrice(){
			$min = 100;
            $max = 300;
			if (! empty($_POST['min_price'])) {
				$min = $_POST['min_price'];
			}
			
			if (! empty($_POST['max_price'])) {
				$max = $_POST['max_price'];
			}
			$db = config::getConnexion();
			$sql=	"select * from produit where prix BETWEEN '$min' AND '$max'";
			$liste=$db->query($sql);
			return $liste;
			
		}
		

		/*
		
		
		
		
		
		function recuperer($reference_sous_categorie){
			$db = config::getConnexion();
			$sql = "SELECT reference FROM produit WHERE reference_sous_categorie = $reference_sous_categorie";
			$liste=$db->query($sql);
			return $liste;
		}
		
		function afficherproduitavecimg(){
			$db = config::getConnexion();
			$sql="SElECT produit.nom,produit.reference,produit.chemin_img from produit";
			/*$sql="SElECT produit.nom,produit.reference,image.chemin from produit INNER JOIN image ON produit.reference=image.reference_produit ";*/
			/*$liste=$db->query($sql);
			return $liste;
		}

		function recupererproduit(){
			$db = config::getConnexion();
			$sql="SElECT reference,nom,chemin_img FROM produit";
			$liste=$db->query($sql);
			return $liste;
		}*/

		function afficherproduit(){
			$db = config::getConnexion();
			$sql="SELECT * FROM produit ";
			$liste=$db->query($sql);
			return $liste;
			
		}

		function supprimerproduit($reference){
			$db = config::getConnexion();
			$sql="DELETE FROM produit where reference= :reference";
			$req=$db->prepare($sql);
			$req->bindValue(':reference',$reference);
	        $req->execute();
	        
		}

		function modifierproduit($produit,$reference){
			$db = config::getConnexion();
			
			$sql="UPDATE produit SET nom=:nom,quantite_total=:quantite_total,prix=:prix,description=:description WHERE reference=:reference";
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':quantite_total',$produit->getQuantite_total());
				$req->bindValue(':prix',$produit->getPrix());
				$req->bindValue(':description',$produit->getDescription());
				$req->bindValue(':nom',$produit->getNom());
				$req->bindValue(':reference',$reference);
				$s=$req->execute();
			}
			catch(Exception $e){
				echo("Erreur".$e->getMessage());
			}

		}

		function recuperer_produit($reference){
			
			$sql="SELECT * FROM produit WHERE reference=$reference";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->execute();
				
				$produit = $req->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
/*
		function afficherproduitseloncategorie($catalogue){
			$db = config::getConnexion();
			$sql="SElECT * FROM produit WHERE nomCatalogue=:catalogue";
			$req=$db->prepare($sql);
			$req->bindValue(':catalogue',$catalogue);
			return $liste;
		}
		
		function reccupererproduit($reference){
			$db = config::getConnexion();
			$sql="SELECT * from produit where reference=$reference";
			$liste=$db->query($sql);
			return $liste;
		}
		
		function supprimerproduit($reference){
			$sql1="DELETE FROM image where reference= :reference";
			$sql="DELETE FROM produit where reference= :reference";
			$db = config::getConnexion();
			$req1=$db->prepare($sql1);
	        $req=$db->prepare($sql);
			$req1->bindValue(':reference',$reference);
			$req->bindValue(':reference',$reference);
	        $req1->execute();
	        $req->execute();
		}
		*/
	}

  ?>
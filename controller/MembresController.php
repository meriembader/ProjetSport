<?php
	
	
	class config {
		private static $pdo = NULL;   
	
		public static function getConnexion() {
		  if (!isset(self::$pdo)) {
			try{
			  self::$pdo = new PDO('mysql:host=localhost;dbname=projetSport', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
			  
			}catch(Exception $e){
			  die('Erreur: '.$e->getMessidM());
			}
		  }
		  return self::$pdo;
		}   
	  }
	
	class MembresC 
	{
		
		public function afficherUtilisateurs(){
			
			try {
                $pdo = getConnexion();
                $query = $pdo->prepare('SELECT * FROM membres');
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
		}




		public function ajouterUtilisateur($membres)
		{
			try {
               $pdo = getConnexion(); 
                $query = $pdo->prepare('INSERT INTO membres (nom, prenom, sexe, taille, poids, adresse, mail,date_naissance, mdp,telephone) 
			VALUES (:nom,:prenom, :sexe, :taille, :poids, :adresse, :mail,:date_naissance, :mdp,:telephone)');
			$pass=password_hash($membres->getmdp(), PASSWORD_DEFAULT);// pour que le mdp soit crypté dans la bd
              $query->execute([
					'nom' => $membres->getnom(),
					'prenom' => $membres->getprenom(),

					'sexe' => $membres->getsexe(),
					'taille' => $membres->gettaille(),
					'poids' => $membres->getpoids(),
					//'imc' => $membres->getimc(),
					'adresse' => $membres->getadresse(),
					'mail' => $membres->getmail(),
					'date_naissance' => $membres->getdate_naissance(),
					'mdp' => $pass,
					'telephone' => $membres->gettelephone(),
		
				]);			
			}
			catch (PDOException $e) {
                $e->getMessage();
            }
			}

		



	 public function connexionMembreC($mail,$password)
	{
			echo $mail;
			echo $password;
			try {
                $pdo = getConnexion();
                $query = $pdo->prepare('SELECT id, mail, mdp FROM membres WHERE mail = :mail');
                 $query->execute(array(
    			'mail' => $mail));
				$resultat = $query->fetch();
				print_r($resultat);
				$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);
				/*if($_POST['mdp'] == $resultat['mdp']){
					$isPasswordCorrect = true;
										}*/
if (!$resultat)
{
	 header("Location: ../Views/connexion.php");

    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
      //  $_SESSION['mail'] = $mail;
        header("Location:  ../Views/accueil.php");
        echo 'Vous êtes connecté !';
    }
    else {
        header("Location:  ../Views/connexion.php");

        echo 'Mauvais identifiant ou mot de passe !';
    	}
}

            } catch (PDOException $e)
             {
                $e->getMessage();
            }
		}

		/*public function deconnexionMembreC($membre){
			session_start();
			session_destroy();
			header("Location: connexion.php");
		}*/

		/*
		function modifierUtilisateur($id,$membres){
			$sql="UPDATE membres SET nom= :nom, prenom=:prenom,sexe= :sexe,taille= :taille,poids= :poids,imc=:imc,adresse= :adresse, mail= :mail,date_naissance=:date_naissance,mdp= :mdp,telephone=:telephone where id= :id";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $membres->getnom(),
					'prenom' => $membres->getprenom(),

					'sexe' => $membres->getsexe(),
					'taille' => $membres->gettaille(),
					'poids' => $membres->getpoids(),
					'imc' => $membres->getimc(),
					'adresse' => $membres->getadresse(),
					'mail' => $membres->getmail(),
					'date_naissance' => $membres->getdate_naissance(),
					'mdp' => $membres->getmdp(),
					'telephone' => $membres->gettelephone(),
					
				]);	
				echo $query->rowCount()."records UPDATED successfully";
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
	    }
		function supprimerUtilisateur(int $id){
			$sql="DELETE FROM membres where id= :id";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);				
				$query->execute(['id' =>$id]);
				echo $query->rowCount() ."records DELETED successfully";
			}catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
		}
		function rechercherUtilisateur(int $id){
			$sql="SELECT * FROM membres where id= :id";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);				
				$query->execute(['id' =>$id]);
				return $query->fetch();
			}catch(Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
		}
	}*/
}
?>
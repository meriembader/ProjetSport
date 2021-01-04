<?php
     include '../../controller/MembresController.php';

		  	$membreC =  new MembresC();
		  	echo "khra";
        	 if (isset($_POST['username']) && isset($_POST['mdp'])){
              $membreC->connexionMembreC($_POST['username'],$_POST['mdp']);
            //header('Location:accueil.php');
        }

?>
<?php
    
    include_once "../controllers/MembresController.php";

    
    $membresC =  new membresC();
     //print_r($_POST);
             if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sexe'])&& isset($_POST['taille'])&& isset($_POST['poids'])&& isset($_POST['adresse'])&& isset($_POST['mail'])&& isset($_POST['date_naissance'])&& isset($_POST['mdp'])&& isset($_POST['telephone']) ) 
             {
              $membres = new membres($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['taille'],$_POST['poids'],$_POST['adresse'],$_POST['mail'],$_POST['date_naissance'],$_POST['mdp'],$_POST['telephone']);
              
             // print_r($membres);
              $membresC->ajouterUtilisateur($membres);
              //echo "c fait";
             header('Location:connexion.php');
        }


    
?>
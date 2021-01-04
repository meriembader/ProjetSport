<?php
session_start();
     include '../../controllers/PanierController.php';

		  	$panierC =  new PanierC();
              $panierC->deleteProduitPanier($_GET['id']);
            header('Location:panier.php?id='.$_SESSION["id"]);
        

?>
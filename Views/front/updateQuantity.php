<?php
     include '../../controller/PanierController.php';

		  	$panierC =  new PanierC();
		  	if(isset($_GET["id_panier"]) && isset($_GET["quantite"]))
              $panierC->addQuantity($_GET["id_panier"],$_GET["quantite"]);
           header('Location:panier.php?id='.$_SESSION["id"]);
        
?>
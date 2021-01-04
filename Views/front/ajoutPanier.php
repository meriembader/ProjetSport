<?php
session_start();
  /*A l'ajout du produit dans le panier, on recherche le prix de base du produit
  et s'il y a une promo qui correspond à cette reference, puis on entre les données dans la table panier.*/
     include_once '../../controller/PanierController.php';
     include_once '../../controller/ProduitController.php';
     include_once '../../controller/PromoController.php';

		  	$panierC =  new panierC();
		  	$promoC =  new promoC();
		    $produitC =  new produitC();

        	 if (isset($_GET['id_produit'])) {

      			$result = $produitC->getProduitById($_GET['id_produit']);

            print_r($result);
/* voir avec Fadwa s'il faut chercher par la référence ou l'id du produit  */
      			$promo= $promoC->getPromoByProduct($result["id_produit"]);
      			if($promo){
      				$price = $result["prix"] - ($result["prix"] * $promo["description_promo"] / 100) ;
      			}else{
      				$price = $result["prix"];
      			}
/*besoin d'une connexion pour pouvoir tester */
             $panier = new Panier($result['id_produit'],$_SESSION['id'],$price);
// $panier = new Panier($result['id_produit'],2,$price);
           //print_r($panier);
           $panierC->addPanierC($panier);
           header('Location:panier.php?id='.$_SESSION["id"]);
        }

?>
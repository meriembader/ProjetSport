<?php
 
 include_once "../../../controller/produitC.php";
 include_once "../../../model/produit.php";
$produitC=new produitC();

if(isset($_POST['supprimer'])){
   
   $produitC->supprimerproduit($_POST['reference']);
   header('location: listProduit.php');
 } 

 ?>
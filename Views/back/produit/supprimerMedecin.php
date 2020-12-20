<?php
 
 include_once "../../../controller/medecinC.php";
 include_once "../../../model/medecin.php";
$medecinC=new medecinC();

if(isset($_POST['supprimer'])){
   
   $medecinC->supprimermedecin($_POST['idM']);
   header('location: listMedecin.php');
 } 

 ?>
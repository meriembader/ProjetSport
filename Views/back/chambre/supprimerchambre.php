supprimerchambre.php

<?php
 include_once "../../../controller/chambreController.php";
 include_once "../../../model/chambre.php";

$chambreController=new chambreController();

if(isset($_POST['supprimer'])){
   
   $chambreController->supprimerchambre($_POST['idchambre']);
   header('location: consulterchambres.php');
 } 
 ?>
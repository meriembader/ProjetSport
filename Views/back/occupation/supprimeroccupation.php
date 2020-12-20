supprimeroccupation.php

<?php
 include_once "../../../controller/occupationController.php";
 include_once "../../../model/occupation.php";

$occupationController=new occupationController();

if(isset($_POST['supprimer'])){
   
   $occupationController->supprimeroccupation($_POST['idoccupation']);
   header('location: consulteroccupation.php');
 } 
 ?>
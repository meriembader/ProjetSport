<?php
 
 include_once "../../../controller/blogC.php";
 include_once "../../../model/blog.php";
$blogC=new blogC();

if(isset($_POST['supprimer'])){
   
   $blogC->supprimerblog($_POST['idB']);
   header('location: listBlog.php');
 } 

 ?>
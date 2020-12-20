<?php

include_once "../../../controller/categorieC.php";
include_once "../../../model/categorie.php";


    function pdo_connect_mysql() {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'projet';
        try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        } catch (PDOException $exception) {
            // If there is an error with the connection, stop the script and display the error.
            exit('Failed to connect to database!');
        }
    }
    $msg = '';
    $pdo = pdo_connect_mysql();
    // Check if the categorie id exists, for example update.php?id=1 will get the categorie with the id of 1
    if (isset($_GET['idCat'])) {
        if (!empty($_POST)) {
            // This part is similar to the create.php, but instead we update a record and not insert
          //  $idCat = isset($_POST['idCat']) ? $_POST['idCat'] : NULL;
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        
            $chemin_img = isset($_POST['chemin_img']) ? $_POST['chemin_img'] : '';
           
            // Update the record
            $stmt = $pdo->prepare('UPDATE categorie SET  nom = ?, chemin_img = ? WHERE idCat = ?');
            $stmt->execute([ $nom, $chemin_img,  $_GET['idCat']]);
            $msg = 'Updated Successfully!';
        }
        // Get the categorie from the categories table
     $stmt = $pdo->prepare('SELECT * FROM categorie WHERE idCat = ?');
       $stmt->execute([$_GET['idCat']]);
      $categorie = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$categorie) {
           exit('categorie doesn\'t exist with that idCat!');
        }
    } 
    else {
        exit('No idCat specified!');
    }
    
    ?>
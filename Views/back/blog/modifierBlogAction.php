<?php

include_once "../../../controller/blogC.php";
include_once "../../../model/blog.php";


    function pdo_connect_mysql() {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'projetmedecin';
        try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        } catch (PDOException $exception) {
            // If there is an error with the connection, stop the script and display the error.
            exit('Failed to connect to database!');
        }
    }
    $msg = '';
    $pdo = pdo_connect_mysql();
    // Check if the blog id exists, for example update.php?id=1 will get the blog with the id of 1
    if (isset($_GET['idB'])) {
        if (!empty($_POST)) {
            // This part is similar to the create.php, but instead we update a record and not insert
          //  $idB = isset($_POST['idB']) ? $_POST['idB'] : NULL;
            $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $chemin_img = isset($_POST['chemin_img']) ? $_POST['chemin_img'] : '';
            $idM = isset($_POST['idM']) ? $_POST['idM'] : '';
            $date = isset($_POST['date']) ? $_POST['date'] : '';
            // Update the record
            $stmt = $pdo->prepare('UPDATE blog SET  titre = ?, description = ?, chemin_img = ?, idM = ?, date = ? WHERE idB = ?');
            $stmt->execute([ $titre, $description, $chemin_img, $idM, $date, $_GET['idB']]);
            $msg = 'Updated Successfully!';
        }
        // Get the blog from the blogs table
     $stmt = $pdo->prepare('SELECT * FROM blog WHERE idB = ?');
       $stmt->execute([$_GET['idB']]);
      $blog = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$blog) {
           exit('blog doesn\'t exist with that idB!');
        }
    } 
    else {
        exit('No idB specified!');
    }
    
    ?>
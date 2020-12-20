<?php

    include_once "../../../Controller/blogC.php";
    include_once "../../../Model/blog.php";

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
    // Check if the produit idB exists, for example update.php?idB=1 will get the produit with the idB of 1
   
        if (!empty($_POST)) {
            $idB = isset($_POST['idB']) && !empty($_POST['idB']) && $_POST['idB'] != 'auto' ? $_POST['idB'] : NULL;
            $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';

            $chemin_img = isset($_POST['chemin_img']) ? $_POST['chemin_img'] : '';
            $idM = isset($_POST['idM']) ? $_POST['idM'] : '';
            $date = isset($_POST['date']) ? $_POST['date'] : '';
            
            $stmt = $pdo->prepare('INSERT INTo blog VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([$idB, $titre, $description, $chemin_img, $idM, $date]);
            // Output message
            $msg = 'Created Successfully!';
        }


    
?>
 
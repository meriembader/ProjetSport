<?php

    include_once "../../../Controller/categorieC.php";
    include_once "../../../Model/categorie.php";

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
    // Check if the produit idCat exists, for example update.php?idCat=1 will get the produit with the idCat of 1
   
        if (!empty($_POST)) {
            $idCat = isset($_POST['idCat']) && !empty($_POST['idCat']) && $_POST['idCat'] != 'auto' ? $_POST['idCat'] : NULL;
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $chemin_img = isset($_POST['chemin_img']) ? $_POST['chemin_img'] : '';
          
            $stmt = $pdo->prepare('INSERT INTo categorie VALUES (?, ?, ?)');
            $stmt->execute([$idCat, $nom, $chemin_img]);
            // Output message
            $msg = 'Created Successfully!';
        }


    
?>
 
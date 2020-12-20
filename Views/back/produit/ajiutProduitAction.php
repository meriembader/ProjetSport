<?php

    include_once "../../../Controller/medecinC.php";
    include_once "../../../Model/medecin.php";

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
    // Check if the medecin idM exists, for example update.php?idM=1 will get the medecin with the idM of 1
   
        if (!empty($_POST)) {
            $idM = isset($_POST['idM']) && !empty($_POST['idM']) && $_POST['idM'] != 'auto' ? $_POST['idM'] : NULL;
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
            $age = isset($_POST['age']) ? $_POST['age'] : '';
            $departement = isset($_POST['departement']) ? $_POST['departement'] : '';
            $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
            
            $stmt = $pdo->prepare('INSERT INTO medecin VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([$idM, $nom, $prenom, $age, $departement, $telephone]);
            // Output message
            $msg = 'Created Successfully!';
        }


    
?>
 
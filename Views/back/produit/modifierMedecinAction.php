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
    // Check if the medecin id exists, for example update.php?id=1 will get the medecin with the id of 1
    if (isset($_GET['idM'])) {
        if (!empty($_POST)) {
            // This part is similar to the create.php, but instead we update a record and not insert
          //  $idM = isset($_POST['idM']) ? $_POST['idM'] : NULL;
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
            $age = isset($_POST['age']) ? $_POST['age'] : '';
            $departement = isset($_POST['departement']) ? $_POST['departement'] : '';
            $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
            // Update the record
            $stmt = $pdo->prepare('UPDATE medecin SET  nom = ?, prenom = ?, age = ?, departement = ?, telephone = ? WHERE idM = ?');
            $stmt->execute([ $nom, $prenom, $age, $departement, $telephone, $_GET['idM']]);
            $msg = 'Updated Successfully!';
        }
        // Get the medecin from the medecins table
     $stmt = $pdo->prepare('SELECT * FROM medecin WHERE idM = ?');
       $stmt->execute([$_GET['idM']]);
      $medecin = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$medecin) {
           exit('medecin doesn\'t exist with that idM!');
        }
    } 
    else {
        exit('No idM specified!');
    }
    
    ?>
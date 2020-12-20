<?php
  include_once "../../../Controller/produitC.php";
  include_once "../../../Model/produit.php";


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
// Check if the produit id exists, for example update.php?id=1 will get the produit with the id of 1
if (isset($_GET['reference'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
      //  $reference = isset($_POST['reference']) ? $_POST['reference'] : NULL;
        $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $prix = isset($_POST['prix']) ? $_POST['prix'] : '';
        $chemin_img = isset($_POST['chemin_img']) ? $_POST['chemin_img'] : '';
        $quantite_total = isset($_POST['quantite_total']) ? $_POST['quantite_total'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $idCat = isset($_POST['idCat']) ? $_POST['idCat'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE produit SET  nom = ?, prix = ?, chemin_img = ?, quantite_total = ?, description = ? , idCat = ?  WHERE reference = ?');
        $stmt->execute([ $nom, $prix, $chemin_img, $quantite_total, $description,$idCat, $_GET['reference']]);
        $msg = 'Updated Successfully!';
    }
    // Get the produit from the produits table
 $stmt = $pdo->prepare('SELECT * FROM produit WHERE reference = ?');
   $stmt->execute([$_GET['reference']]);
  $produit = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$produit) {
       exit('produit doesn\'t exist with that reference!');
    }
} 
else {
    exit('No reference specified!');
}

?>
<?PHP
//session_start();
    /* erreur au niveau du chemin, à voir avec le groupe ou le prof */

     require_once __DIR__ .'/config.php';
     require_once __DIR__ .'/Panier.php';

    class PanierC {

        public function ListePanierC() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare('SELECT * FROM panier WHERE statut=1 && id=:id');
                $query->execute([
                  
                ]);
               // print_r($query);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function addPanierC($panier) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO panier (reference_produit, id, prix_produit) 
                VALUES (:reference_produit, :id, :prix_produit)'
                );
                $query->execute([
                    'reference_produit' => $panier->getReference(),
                    'id' => $panier->getId(),
                    'prix_produit' => $panier->getPrixProduit()
                ]);

            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
          public function updateValidationPanier($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE panier SET statut = 2 WHERE statut == 1 && id == :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

public function addQuantity($id_panier,$quantite) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE panier SET quantite = :quantite WHERE id_panier = :id_panier'
                );
                $query->execute([
                    'id_panier' => $id_panier,
                    'quantite' => $quantite 
                ]);
                print_r($query);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteProduitPanier($id_panier) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM panier WHERE id_panier = :id_panier'
                );
                $query->execute([
                    'id_panier' => $id_panier
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

    }
?>
<?PHP
    /* erreur au niveau du chemin, à voir avec le groupe ou le prof */

     require_once __DIR__ .'/config.php';
   // include "../../models/Promo.php";
         require_once __DIR__ .'/Promo.php';

    class PromoC {

        public function ListePromoC() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare('SELECT * FROM promo');
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function addPromoC($promo) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO promo (description_promo, date_debut, date_fin, id_pack) 
                VALUES (:description_promo, :date_debut, :date_fin ,:id_pack)'
                );
                $query->execute([
                    'description_promo' => $promo->getDescriptionPromo(),
                    'date_debut' => $promo->getDateDebut(),
                    'date_fin' => $promo->getDateFin(),
                    'id_pack' => $promo->getIdPack()
                ]);

            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

          public function getPromoById($id_promo) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM promo WHERE id_promo = :id_promo'
                );
                $query->execute([
                    'id_promo' => $id_promo
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getPromoByProduct($id_produit) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM promo WHERE id_produit = :id_produit'
                );
                $query->execute([
                    'id_produit' => $id_produit
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

         public function getPromoByPack($id_pack) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM promo WHERE id_pack = :id_pack'
                );
                $query->execute([
                    'id_pack' => $id_pack
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updatePromo($promo, $id_promo) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE promo SET description_promo = :description_promo, date_debut = :date_debut, date_fin = :date_fin, id_pack = :id_pack WHERE id_promo = :id_promo'
                );
                $query->execute([
                    'description_promo' => $promo->getDescriptionPromo(),
                    'date_debut' => $promo->getDateDebut(),
                    'date_fin' => $promo->getDateFin(),
                    'id_pack' =>  $promo->getIdPack(),
                    'id_promo' => $id_promo

                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deletePromo($id_promo) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM promo WHERE id_promo = :id_promo'
                );
                $query->execute([
                    'id_promo' => $id_promo
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


/* affichage des promo actives (dont la date de fin n'est pas passé) */

        public function searchPromoActive() {
            $today = date("Y-m-d H:i:s");
            $sql = "SELECT * from promo where date_fin>=:today"; 
             $pdo = getConnexion();
            try {
                $query = $pdo->prepare($sql);
                $query->execute([
                    'today' => $today,
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
/* affichage des promo inactives */
        public function searchPromoInactive() {
           $today = date("Y-m-d H:i:s");
           echo $today;
            $sql = "SELECT * from promo where date_fin<:today"; 
             $pdo = getConnexion();
            try {
                $query = $pdo->prepare($sql);
                $query->execute([
                    'today' => $today,
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }


    }
?>
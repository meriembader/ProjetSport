<?PHP
    /* erreur au niveau du chemin, à voir avec le groupe ou le prof */
    
    require_once __DIR__ .'/config.php';
    require_once __DIR__ .'/Pack.php';

    class PackC {

        public function ListePackC() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare('SELECT * FROM pack');
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function addPackC($pack) {
            try {
               $pdo = getConnexion(); 
                $query = $pdo->prepare(
                    'INSERT INTO pack (nom_pack, description_pack, prix_pack) 
                VALUES (:nom_pack, :description_pack, :prix_pack)'
                );
                $query->execute([
                    'nom_pack' => $pack->getNomPack(),
                    'description_pack' => $pack->getDescriptionPack(),
                    'prix_pack' => $pack->getPrixPack()
                ]);

            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

          public function getPackById($id_pack) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack WHERE id_pack = :id_pack'
                );
                $query->execute([
                    'id_pack' => $id_pack
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updatePack($pack, $id_pack) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE pack SET nom_pack = :nom_pack, description_pack = :description_pack, prix_pack = :prix_pack WHERE id_pack = :id_pack'
                );
                $query->execute([
                    'nom_pack' => $pack->getNomPack(),
                    'description_pack' => $pack->getDescriptionPack(),
                    'prix_pack' => $pack->getPrixPack(),
                    'id_pack' => $id_pack
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deletePack($id_pack) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM pack WHERE id_pack = :id_pack'
                );
                $query->execute([
                    'id_pack' => $id_pack
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

    }
?>
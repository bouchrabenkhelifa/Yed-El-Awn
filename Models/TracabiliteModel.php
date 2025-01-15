<?php
  class TracabiliteModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getTrace($id_membre) {
        $query = "SELECT t.*, d.*, m.* 
                  FROM tracabilite t
                  INNER JOIN don d ON t.id_don = d.id_don
                  INNER JOIN membre m ON t.id_membre = m.id 
                  WHERE t.id_membre = :id_membre";  // Filtrage pour le membre spécifique
        
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_membre', $id_membre, PDO::PARAM_INT);
        
        try {
            $stmt->execute();
            $traces = $stmt->fetchAll(PDO::FETCH_ASSOC);  // Récupération des résultats sous forme de tableau associatif
            return $traces;  // Retourner correctement la variable $traces
        } catch (PDOException $e) {
            error_log("Erreur lors de la récupération des Dons : " . $e->getMessage());
            return false;  // Retourner false en cas d'erreur
        }
    }
}


?>

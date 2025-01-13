<?php

class AideModel {
    private $conn;

    public $id;
    public $type_aide;
    public $nom_demandeur;
    public $date_naissance;
    public $date_demande;
    public $description;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Récupérer toutes les demandes
    public function getAll() {
        $query = "SELECT * FROM demande_aide";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function AjouterDemande($nom_demandeur, $date_naissance, $type_aide, $description,$date_demande) {
        try {
            $query = "INSERT INTO demande_aide (nom_demandeur, date_naissance, type_aide, description, date_demande) 
                      VALUES (:nom_demandeur, :date_naissance, :type_aide, :description, :date_demande)";
            
            $stmt = $this->conn->prepare($query);
            
            
            // Bind des paramètres directement avec les valeurs reçues
            $stmt->bindParam(':nom_demandeur', $nom_demandeur);
            $stmt->bindParam(':date_naissance', $date_naissance);
            $stmt->bindParam(':type_aide', $type_aide);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':date_demande', $date_demande);
            
            if ($stmt->execute()) {
                return true;
            }
            return false;
        } catch(PDOException $e) {
            error_log("Erreur lors de l'ajout de la demande: " . $e->getMessage());
            return false;
        }
    }
}
?>

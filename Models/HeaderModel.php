<?php
class HeaderModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAdminInfo($idadministrateur) {
        try {
            $query = "SELECT nom, photo FROM administrateur WHERE idadministrateur = :idadministrateur";
            
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':idadministrateur', $idadministrateur, PDO::PARAM_INT);
            $stmt->execute();
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);
            return $admin;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
}
?>

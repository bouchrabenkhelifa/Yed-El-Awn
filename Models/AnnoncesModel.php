<?php

class AnnoncesModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM annonce";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function supprimer($id) {
        $sql = "DELETE FROM annonce WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function ajouter($titre, $description,$date_publication)
     {  $sql = "INSERT INTO annonce (titre, description,date_publication)
                VALUES (:titre,:description,:date_publication)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':titre' => $titre,
            ':description' => $description,
            ':date_publication' => $date_publication,
        ]);
        return $this->conn->lastInsertId();
    }
    
}

    ?>

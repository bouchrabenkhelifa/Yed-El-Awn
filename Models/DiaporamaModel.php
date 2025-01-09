<?php

class DiaporamaModel {
    private $conn;
    public $id;
    public $photo;
    public $title;


    public function __construct($db) {
        $this->conn = $db;
    }

    public function getDiapo() {
        $query = "SELECT * FROM diaporama";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function update($id, $title, $photo) {
        $sql = "UPDATE diaporama SET title = :title, photo = :photo WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':photo', $photo);
        return $stmt->execute();
    }
    public function supprimer($id) {
        $sql = "DELETE FROM diaporama WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    
}
}
?>    
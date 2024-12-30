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

}
?>    
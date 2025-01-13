<?php

class MenuModel {
    private $conn;


    public function __construct($db) {
        $this->conn = $db;
    }

    public function getMenu() {
        $query = "SELECT * FROM menu";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getAsso() {
        $query = "SELECT * FROM association";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

}
?>    
<?php

class RemisesModel {
    private $conn;


    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM remise";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
    ?>

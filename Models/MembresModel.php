<?php

class MembresModel {
    private $conn;


    public $id;
    public $nom;
    public $adresse;
    public $email;
    public $telephone;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM membre";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
    ?>

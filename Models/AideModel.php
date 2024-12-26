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

    public function getAll() {
        $query = "SELECT * FROM demande_aide";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
    ?>

<?php

class DonModel {
    private $conn;


    public $id_don;
    public $montant;
    public $date_don;
    public $type_don;
    public $methode_payement;
    public $statut;
    public $recu;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM don";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
    ?>

<?php

class DonModel {
    private $conn;


    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM don";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getDonById($id) {
        $query = "SELECT id_don, montant, DATE_FORMAT(date_don, '%d/%m/%Y') as date_don,
                         methode_payement, type_don, recu, nom_donneur, statut 
                  FROM don 
                  WHERE id_don = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
    ?>

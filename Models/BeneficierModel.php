<?php

class BeneficierModel {
    private $conn;


    public function __construct($db) {
        $this->conn = $db;
    }


    public function get($idoffre) {
        $sql = "SELECT m.nom, m.telephone,m.adresse
        FROM beneficieroffre b
        JOIN membre m ON b.id_membre = m.id
        WHERE b.id_offre = ?";  
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$idoffre]);
        return $stmt;
    }
}
    ?>

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
    public function getMembreById($id) {
        $sql = "SELECT * FROM membre WHERE id = :id";
        $stmt = $this->conn->prepare($sql); 
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateMembre($id, $nom, $telephone, $email, $adresse) {
        $sql = "UPDATE membre SET nom = :nom, telephone = :telephone, email = :email, adresse = :adresse WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':adresse', $adresse);
        return $stmt->execute();
    }
}
    ?>

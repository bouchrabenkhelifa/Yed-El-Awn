<?php

class PartenairesModel {
    private $conn;


    public $id;
    public $nom_etablissement;
    public $idcategorie;
    public $ville;
    public $email;
    public $telephone;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM partenaire";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}

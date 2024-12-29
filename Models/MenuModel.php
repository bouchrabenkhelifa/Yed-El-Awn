<?php

class MenuModel {
    private $conn;
    public $id_menu;
    public $nom;
    public $id_association;
    public $nom_associaiton;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getMenu() {
        $query = "SELECT * FROM menu";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getAssociation() {
        $query = "SELECT * FROM association";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

}
?>    
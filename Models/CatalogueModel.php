<?php

class CatalogueModel {
    private $conn;


    public $id;
    public $nom_etablissement;
    public $idcategorie;
    public $ville;
    public $email;
    public $telephone;
    public $nom;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT c.idcategorie, c.nom AS categorie_nom, 
        p.idpartenaire, p.nom AS partenaire_nom, p.logo, p.telephone, p.email, p.ville
        FROM categorie c
        LEFT JOIN partenaire p ON c.idcategorie = p.idcategorie
        ORDER BY c.nom";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
        
}
?>
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
    public function supprimer($idpartenaire) {
            $sql = "DELETE FROM partenaire WHERE idpartenaire = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(1, $idpartenaire);
            $stmt->execute();
        
    }
    public function ajouter($nom, $idcategorie, $telephone, $email, $ville, $logo, $password) {
        $sql = "INSERT INTO partenaires (nom, idcategorie, telephone, email, ville, logo, password) 
                VALUES (:nom, :idcategorie, :telephone, :email, :ville, :logo, :password)";
$stmt = $this->conn->prepare($sql);
$stmt->execute([
            ':nom' => $nom,
            ':idcategorie' => $idcategorie,
            ':telephone' => $telephone,
            ':email' => $email,
            ':ville' => $ville,
            ':logo' => $logo,
            ':password' => password_hash($password, PASSWORD_DEFAULT) 
        ]);
        return $this->conn->lastInsertId();
    }
    
}
?>
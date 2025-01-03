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

    public function getPartenaire($email) {
        try {
            $query = "SELECT * FROM partenaire WHERE email=:email";
            $stmt = $this->conn->prepare($query); 
            $stmt->bindParam(':email', $email, PDO::PARAM_STR); 
            $stmt->execute();
            $partenaire = $stmt->fetch(PDO::FETCH_ASSOC);
            return $partenaire;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
    public function getPartenaireById($id) {
        $sql = "SELECT * FROM partenaire WHERE idpartenaire = :id";
        $stmt = $this->conn->prepare($sql); 
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
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
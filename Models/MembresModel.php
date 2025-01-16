<?php

class MembresModel {
    private $conn;


    public $id;
    public $nom;
    public $adresse;
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
    public function supprimer($id) {
        $sql = "DELETE FROM membre WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getMembreById($id) {
        $sql = "SELECT * FROM membre WHERE id = :id";
        $stmt = $this->conn->prepare($sql); 
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function ajouter($nom,$telephone, $adresse,$motdepasse,$date_enregistrement,$id_utilisateur) {
        $sql = "INSERT INTO membre (nom, telephone, adresse,motdepasse,date_enregistrement,id_utilisateur) 
                VALUES (:nom, :telephone, :adresse,:motdepasse,:date_enregistrement,:id_utilisateur)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':telephone' => $telephone,
            ':adresse' => $adresse,
            ':date_enregistrement' => $date_enregistrement,
            ':id_utilisateur' => $id_utilisateur,
            ':motdepasse' => password_hash($motdepasse, PASSWORD_DEFAULT) // Correct password hashing
        ]);
        return $this->conn->lastInsertId();
    }
    public function updateMembre($id, $nom, $telephone, $adresse) {
        $sql = "UPDATE membre SET nom = :nom, telephone = :telephone, adresse = :adresse WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':adresse', $adresse);
        return $stmt->execute();
    }
}
    ?>

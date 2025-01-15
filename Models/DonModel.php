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
    public function updateStatut($id_don, $statut) {
        $query = "UPDATE don SET statut = :statut WHERE id_don = :id_don";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':statut', $statut, PDO::PARAM_STR);
        $stmt->bindParam(':id_don', $id_don, PDO::PARAM_INT);
        return $stmt->execute();
    }
    
    public function ajouter($nom_donneur, $montant, $recu, $methode_payement, $type_don, $statut, $date_don) {
        $sql = "INSERT INTO don (nom_donneur, montant, recu, methode_payement, type_don, statut, date_don) 
                VALUES (:nom_donneur, :montant, :recu, :methode_payement, :type_don, :statut, :date_don)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nom_donneur' => $nom_donneur,
            ':montant' => $montant,
            ':recu' => $recu,
            ':methode_payement' => $methode_payement,
            ':type_don' => $type_don,
            ':statut' => $statut,
            ':date_don' => $date_don
        ]);
    }
    
    
}
    ?>

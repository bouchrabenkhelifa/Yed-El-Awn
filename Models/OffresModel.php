<?php

class OffresModel {
    private $conn;


    public function __construct($db) {
        $this->conn = $db;
    }


    public function ajouter($idpartenaire, $titre, $datedebut, $datefin, $description) {
        $sql = "INSERT INTO offre  (idpartenaire, titre, datedebut, datefin, description) 
                VALUES ( :idpartenaire, :titre, :datedebut, :datefin, :description)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':idpartenaire' => $idpartenaire,
            ':titre' => $titre,
            ':datedebut' => $datedebut,
            ':datefin' => $datefin,
            ':description' => $description,
        ]);
    }
    public function getPartenaireOffres($idpartenaire) {
        $sql = "SELECT o.* FROM Offre o 
                JOIN partenaire p ON o.idpartenaire = p.idpartenaire 
                WHERE p.idpartenaire = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $idpartenaire, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
}}
    ?>

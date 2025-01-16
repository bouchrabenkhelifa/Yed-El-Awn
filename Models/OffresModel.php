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
}
    ?>

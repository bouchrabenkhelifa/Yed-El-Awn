<?php

class BenevoleModel {
    private $conn;
    public $nom;
    public $title;
    public $disponibilite;
    public $date_inscription;
    public $domaine_interet;
    public $telephone;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = " SELECT nom,title,disponibilite,date_inscription,telephone,domaine_interet FROM benevole
                   JOIN evenement ON benevole.id_evenement = evenement.id_evenement
                   JOIN membre ON benevole.id_membre = membre.id ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function ajouter( $id_membre, $domaine_interet, $date_inscription, $id_evenement, $disponibilite) {
        $sql = "INSERT INTO benevole  (id_membre, disponibilite, domaine_interet, date_inscription, id_evenement) 
                VALUES ( :id_membre, :disponibilite, :domaine_interet, :date_inscription, :id_evenement)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id_membre' => $id_membre,
            ':disponibilite' => $disponibilite,
            ':domaine_interet' => $domaine_interet,
            ':date_inscription' => $date_inscription,
            ':id_evenement' => $id_evenement,
        ]);
    }
}
    ?>

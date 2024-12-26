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
                   JOIN membre ON benevole.id = membre.id ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
    ?>

<?php
class StatistiquesModel {

private $db;

public function __construct($db) {
    $this->db = $db;
}

public function getNbMembres() {
    $query = "SELECT COUNT(*) AS total FROM membre";  
    $result = $this->db->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    return $row['total'];
}

public function getNbPartenaires() {
    $query = "SELECT COUNT(*) AS total FROM partenaire"; 
    $result = $this->db->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    return $row['total'];
}

public function getTotalDons() {
    $query = "SELECT SUM(montant) AS total_dons FROM don WHERE statut = 'Accepté'";
    $result = $this->db->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    return $row['total_dons'] ?? 0; // Retourne 0 si NULL
}
}
?>
<?php

class AdhesionModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function ajouter($nom,$telephone,$adresse,$photo,$carteidentite,$recu,$date_enregistrement,$id_utilisateur) {
        $sql = "INSERT INTO membre (nom, telephone, adresse,photo,carteidentite,recu,date_enregistrement,id_utilisateur) 
                VALUES (:nom, :telephone, :adresse,:photo,:carteidentite,:recu,:date_enregistrement,:id_utilisateur)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':telephone' => $telephone,
            ':adresse' => $adresse,
            ':photo' => $photo,
            ':carteidentite' => $carteidentite,
            ':recu' => $recu,
            ':date_enregistrement' => $date_enregistrement,
            ':id_utilisateur' => $id_utilisateur,
         ]);
        return $this->conn->lastInsertId();
    }

}
    ?>

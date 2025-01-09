<?php

class AdhesionModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function ajouter($nom,$telephone,$adresse,$photo,$carteidentite,$recu) {
        $sql = "INSERT INTO membre (nom, telephone, adresse,photo,carteidentite,recu) 
                VALUES (:nom, :telephone, :adresse,:photo,:carteidentite,:recu)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':telephone' => $telephone,
            ':adresse' => $adresse,
            ':photo' => $photo,
            ':carteidentite' => $carteidentite,
            ':recu' => $recu,
         ]);
        return $this->conn->lastInsertId();
    }

}
    ?>

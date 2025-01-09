<?php

class AdhesionModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function ajouter($nom,$telephone, $email, $adresse,$motdepasse,$photo,$carteidentite,$recu) {
        $sql = "INSERT INTO membre (nom, telephone, email, adresse,motdepasse,photo,carteidentite,recu) 
                VALUES (:nom, :telephone, :email, :adresse,:motdepasse,:photo,:carteidentite,:recu)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':telephone' => $telephone,
            ':email' => $email,
            ':adresse' => $adresse,
            ':motdepasse' => password_hash($motdepasse, PASSWORD_DEFAULT) ,
            ':photo' => $photo,
            ':carteidentite' => $carteidentite,
            ':recu' => $recu,
         ]);
        return $this->conn->lastInsertId();
    }

}
    ?>

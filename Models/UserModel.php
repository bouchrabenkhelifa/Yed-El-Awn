<?php

class UserModel {
    private $conn;


    public $id;
    public $nom_etablissement;
    public $idcategorie;
    public $ville;
    public $email;
    public $telephone;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getUser($email) {
        try {
            $query = "SELECT * FROM utilisateur WHERE email=:email";
            $stmt = $this->conn->prepare($query); 
            $stmt->bindParam(':email', $email, PDO::PARAM_STR); 
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }


}
?>
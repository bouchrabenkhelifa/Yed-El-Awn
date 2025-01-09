<?php

class UserModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }
    public function getAll() {
        $query = "SELECT * FROM utilisateur";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }


    public function getUser($email) {
        try {
            $query = "SELECT * FROM utilisateur WHERE email=:email";
            $stmt = $this->conn->prepare($query); 
            $stmt->bindParam(':email', $email, PDO::PARAM_STR); 
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if($user['statut'] === 'bloque') {
                return 'bloque';
            }else{
            return $user;}
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
    public function updateStatus($id, $statut) {
        try {
            $query = "UPDATE utilisateur SET statut = :statut WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':statut', $statut, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
    

}
?>
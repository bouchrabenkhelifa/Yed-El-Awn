<?php

class UserModel {
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    public function getUser($email) {
        try {
            $query = "SELECT u.*, m.id as membre_id 
                     FROM utilisateur u 
                     LEFT JOIN membre m ON u.id = m.id_utilisateur 
                     WHERE u.email = :email";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($user['statut'] === 'bloque') {
                return 'bloque';
            }
            
            return $user;
        } catch (PDOException $e) {
            error_log("Erreur dans getUser: " . $e->getMessage());
            return null;
        }
    }
    
    public function getMembre($userId) {
        try {
            $query = "SELECT * FROM membre WHERE id_utilisateur = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erreur dans getMembre: " . $e->getMessage());
            return null;
        }
    }
    
    

}
?>
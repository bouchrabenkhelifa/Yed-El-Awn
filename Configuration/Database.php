<?php
class Database {
    private $host = 'localhost'; 
    private $db_name = 'association';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function getConnection() {
        if ($this->conn === null) {
            try {
                $this->conn = new PDO(
                    "mysql:host=$this->host;dbname=$this->db_name", 
                    $this->username, 
                    $this->password
                );
                
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $this->conn;
            } catch(PDOException $exception) {
                die("Erreur de connexion : " . $exception->getMessage());
            }
        }
        
        return $this->conn;
    }
}
?>

<?php
class AdminModel {
    private $db;

    public function __construct($db) {
      $this->db = $db;
  }

  public function getAdmin($nom) {
    $query = "SELECT * FROM administrateur WHERE nom = :nom";
    $stmt = $this->db->prepare($query); 
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR); 
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
    return $admin;
}

}
?>

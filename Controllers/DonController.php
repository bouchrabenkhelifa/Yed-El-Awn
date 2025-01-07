<?php

require_once __DIR__ . '/../Models/DonModel.php';
require_once __DIR__ . '/../Views/DonsView.php';
require_once __DIR__ . '/../Views/DonDetailsView.php';

class DonController {
    private $DonModel;
    private $DonsView;
    private $DonDetailsView;
    
    public function __construct($db) {
        $this->DonModel = new DonModel($db);
        $this->DonsView = new DonsView();
        $this->DonDetailsView = new DonDetailsView();
    }

    public function afficherDon() {
        $stmt = $this->DonModel->getAll();
        $Don = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->DonsView->afficherListeDons($Don);
    }
    public function getDonDetails($id) {
        $Don = $this->DonModel->getDonById($id);
        $this->DonDetailsView->afficher($Don);

    
}
}
  ?>

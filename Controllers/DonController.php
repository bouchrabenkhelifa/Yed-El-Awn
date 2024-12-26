<?php

require_once __DIR__ . '/../Models/DonModel.php';
require_once __DIR__ . '/../Views/DonsView.php';

class DonController {
    private $DonModel;
    private $DonsView;

    public function __construct($db) {
        $this->DonModel = new DonModel($db);
        $this->DonsView = new DonsView();
    }

    public function afficherDon() {
        $stmt = $this->DonModel->getAll();
        $Don = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->DonsView->afficherListeDons($Don);
    }
}
  ?>

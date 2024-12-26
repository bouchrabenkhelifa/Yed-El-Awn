<?php

require_once __DIR__ . '/../Models/AideModel.php';
require_once __DIR__ . '/../Views/AideView.php';

class AideController {
    private $AideModel;
    private $AideView;

    public function __construct($db) {
        $this->AideModel = new AideModel($db);
        $this->AideView = new AideView();
    }

    public function afficherAide() {
        $stmt = $this->AideModel->getAll();
        $Aide = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->AideView->afficherListeAide($Aide);
    }
}
?>
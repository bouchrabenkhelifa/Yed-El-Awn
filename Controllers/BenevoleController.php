<?php

require_once __DIR__ . '/../Models/BenevoleModel.php';
require_once __DIR__ . '/../Views/BenevoleView.php';

class BenevoleController {
    private $BenevoleModel;
    private $BenevoleView;

    public function __construct($db) {
        $this->BenevoleModel = new BenevoleModel($db);
        $this->BenevoleView = new BenevoleView();
    }

    public function afficherBenevole() {
        $stmt = $this->BenevoleModel->getAll();
        $Benevole = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->BenevoleView->afficherListeBenevole($Benevole);
    }
}
?>
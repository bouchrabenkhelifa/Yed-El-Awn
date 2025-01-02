<?php

require_once __DIR__ . '/../Models/RemisesModel.php';
require_once __DIR__ . '/../Views/RemisesView.php';

class RemisesController {
    private $RemisesModel;
    private $RemisesView;

    public function __construct($db) {
        $this->RemisesModel = new RemisesModel($db);
        $this->RemisesView = new RemisesView();
    }

    public function afficher() {
        $stmt = $this->RemisesModel->getAll();
        $Remises = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->RemisesView->afficher($Remises);
    }
}
?>
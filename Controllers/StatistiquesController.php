<?php
// StatistiquesController.php
require_once '../Models/StatistiquesModel.php';
require_once '../Views/StatistiquesView.php';

class StatistiquesController {
    private $model;
    private $view;

    public function __construct($db) {
        $this->model = new StatistiquesModel($db);
        $this->view = new StatistiquesView();
    }

    public function afficherDashboard() {
        $stats = [
            'nbMembres' => $this->model->getNbMembres(),
            'nbPartenaires' => $this->model->getNbPartenaires(),
            'totalDons' => $this->model->getTotalDons()
        ];
        
        $this->view->afficherDashboard($stats);
    }
}

?>
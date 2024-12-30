<?php

require_once __DIR__ . '/../Models/DiaporamaModel.php';
require_once __DIR__ . '/../Views/DiaporamaView.php';

class DiaporamaController {
    private $DiapoModel;
    private $DiaporamaView;

    public function __construct($db) {
        $this->DiapoModel = new DiaporamaModel($db);
        $this->DiaporamaView = new DiaporamaView();
    }

    public function afficherDiapo() {
        $stmt = $this->DiapoModel->getDiapo();
        $Diapos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->DiaporamaView->afficherDiapo($Diapos);
    }
}
?>
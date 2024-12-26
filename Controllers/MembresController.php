<?php

require_once __DIR__ . '/../Models/MembresModel.php';
require_once __DIR__ . '/../Views/MembresView.php';

class MembresController {
    private $MembresModel;
    private $MembresView;

    public function __construct($db) {
        $this->MembresModel = new MembresModel($db);
        $this->MembresView = new MembresView();
    }

    public function afficherMembres() {
        $stmt = $this->MembresModel->getAll();
        $Membres = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->MembresView->afficherListeMembres($Membres);
    }
}
?>
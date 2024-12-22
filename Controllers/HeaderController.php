<?php
require_once __DIR__ . '/../Models/HeaderModel.php';
require_once __DIR__ . '/../Views/HeaderView.php';

class HeaderController {
    private $HeaderModel;
    private $HeaderView;

    public function __construct($db) {
        $this->HeaderModel = new HeaderModel($db);  
        $this->HeaderView = new HeaderView();     
    }

    public function EnvoyerHeader() {
        $idadministrateur = 2;
        $adminInfo = $this->HeaderModel->getAdminInfo($idadministrateur); 
        $this->HeaderView->AfficherHeader($adminInfo);
    }
}
?>

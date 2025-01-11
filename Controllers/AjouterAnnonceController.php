<?php
require_once __DIR__ . '/../Views/AjouterAnnonceView.php';
require_once 'HeaderController.php';
require_once 'SidebarController.php';
require_once '../Configuration/Database.php';

class AjouterAnnonceController {
    private $view;

    public function __construct() {
        $this->view = new AjouterAnnonceView();
    }

    public function afficherFormulaire() {
        $this->view->Form();
    }
}


?>

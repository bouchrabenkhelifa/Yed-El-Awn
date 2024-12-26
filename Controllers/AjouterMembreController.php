<?php
require_once __DIR__ . '/../Views/AjouterMembresView.php';
require_once 'HeaderController.php';
require_once 'SidebarController.php';
require_once '../Configuration/Database.php';

class AjouterMembresController {
    private $view;

    public function __construct() {
        $this->view = new AjouterMembresView();
    }

    public function afficherFormulaire() {
        $this->view->FormMembres();
    }
}


?>

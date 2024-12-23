<?php

require_once __DIR__ . '/../Views/AjouterPartenaireView.php';
require_once 'HeaderController.php';
require_once 'SidebarController.php';
require_once '../Configuration/Database.php';

class AjouterPartenairesController {
    private $view;

    public function __construct() {
        $this->view = new AjouterPartenaireView();
    }

    public function afficherFormulaire() {
        $this->view->FormPartenaire();
    }
}


?>

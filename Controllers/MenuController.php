<?php
require_once __DIR__ . '/../Models/MenuModel.php';
require_once __DIR__ . '/../Views/MenuView.php';
require_once __DIR__ . '/../Views/AssociationView.php';

class MenuController {
    private $MenuModel;
    private $MenuView;
    private $AssoView;

    public function __construct($db) {
        $this->MenuModel = new MenuModel($db);
        $this->MenuView = new MenuView();
        $this->AssoView = new AssoView();
    }

    public function afficherMenu() {
        $stmt = $this->MenuModel->getMenu();
        $Menu = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->MenuView->afficherMenu($Menu);
    }

    public function afficherAsso() {
        $Association = $this->MenuModel->getAsso();
        $this->AssoView->afficherAsso($Association);
    }

}
?>
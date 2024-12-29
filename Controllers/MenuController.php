<?php

require_once __DIR__ . '/../Models/MenuModel.php';
require_once __DIR__ . '/../Views/MenuView.php';

class MenuController {
    private $MenuModel;
    private $MenuView;

    public function __construct($db) {
        $this->MenuModel = new MenuModel($db);
        $this->MenuView = new MenuView();
    }

    public function afficherMenu() {
        $stmt = $this->MenuModel->getMenu();
        $Menu = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt1 = $this->MenuModel->getAssociation();
        $Assocition = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        $this->MenuView->afficherMenu($Menu,$Assocition);
    }




}
?>
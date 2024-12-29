<?php
require_once 'MenuController.php';
require_once 'FooterController.php';
require_once '../Configuration/Database.php';
class test {
    public function Afficher()
   {
        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherMenu();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
    }
}


$admin = new test();
$admin->Afficher();
?>

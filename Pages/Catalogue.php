<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/CatalogueController.php';
require_once '../Configuration/Database.php';
class test {
    public function Afficher()
   {
        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $CatalogueController = new CatalogueController($db);
        $CatalogueController->afficherCatalogue();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
   
    }
}


$admin = new test();
$admin->Afficher();
?>

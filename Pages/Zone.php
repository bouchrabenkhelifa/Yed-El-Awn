<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/PartenairesController.php';
require_once '../Controllers/NewsController.php';
require_once '../Controllers/RemisesController.php';
require_once '../Configuration/Database.php';
require_once '../Views/Navbar2.php';
class test {
    public function Afficher()
   {
        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $MenuController->afficherMenu();
        $NewsController = new NewsController($db);
        $NewsController->afficherNews();
        $RemisesController = new RemisesController($db);
        $RemisesController->afficher();
        $PartenairesController = new PartenairesController($db);
        $PartenairesController->afficherlogos();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
   
    }
}
$admin = new test();
$admin->Afficher();
?>

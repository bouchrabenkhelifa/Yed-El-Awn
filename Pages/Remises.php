<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/RemisesController.php';
require_once '../Views/UserNavbarView.php';
require_once '../Configuration/Database.php';
class test {
    public function Afficher()
   {     

        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $Navbar = new UserNavbarView();
        $Navbar->afficher();
        $RemisesController = new RemisesController($db);
        $RemisesController->afficher();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
   
    }
}
$admin = new test();
$admin->Afficher();
?>

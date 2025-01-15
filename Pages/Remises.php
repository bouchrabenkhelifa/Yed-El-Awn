<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/RemisesController.php';
require_once '../Views/UserNavbarView.php';
require_once '../Views/NavbarMembre.php';
require_once '../Configuration/Database.php';
class test {
    public function Afficher()
   {        session_start(); 

        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        if (isset($_SESSION['membre_id']) && $_SESSION['membre_id'] !== null) {
            $Navbar = new NavbarMembre();
        } else {
            $Navbar = new UserNavbarView();
        }
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

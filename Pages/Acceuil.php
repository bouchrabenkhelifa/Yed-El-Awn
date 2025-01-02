<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/DiaporamaController.php';
require_once '../Controllers/PartenairesController.php';
require_once '../Configuration/Database.php';
class test {
    public function Afficher()
   {
        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $DiaporamaController = new DiaporamaController($db);
        $DiaporamaController->afficherDiapo();
        $MenuController->afficherMenu();
        $PartenairesController = new PartenairesController($db);
        $PartenairesController->afficherlogos();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
   
    }
}
$admin = new test();
$admin->Afficher();
?>

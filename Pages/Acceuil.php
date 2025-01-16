<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/DiaporamaController.php';
require_once '../Controllers/NewsController.php';
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
        $NewsController = new NewsController($db);
        $NewsController->afficherNews();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
   
    }
}
$admin = new test();
$admin->Afficher();
?>

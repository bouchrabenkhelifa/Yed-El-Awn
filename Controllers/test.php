<?php
require_once 'MenuController.php';
require_once 'FooterController.php';
require_once 'DiaporamaController.php';
require_once '../Views/LoginView.php';
require_once '../Views/SignupView.php';
require_once '../Configuration/Database.php';
class test {
    public function Afficher()
   {
        /*$database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $DiaporamaController = new DiaporamaController($db);
        $DiaporamaController->afficherDiapo();
        $MenuController->afficherMenu();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();*/
        $log= new LoginView();
        $log->afficher();
        $sign= new SignupView();
        $sign->afficher();
    }
}


$admin = new test();
$admin->Afficher();
?>

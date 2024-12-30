<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Views/LoginView.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   {   
        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $log= new LoginView();
        $log->afficher();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>

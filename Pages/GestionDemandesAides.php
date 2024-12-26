<?php
require_once '../Controllers/AideController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   {   
        $database = new Database();
        $db = $database->getConnection();
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
        $AideController = new AideController($db);
        $AideController->AfficherAide();
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>

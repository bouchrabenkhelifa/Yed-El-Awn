<?php
require_once '../Controllers/AjouterMembreController.php';
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
        $MembresController = new AjouterMembresController();
        $MembresController->afficherFormulaire();
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>

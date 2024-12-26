<?php
require_once '../Controllers/AjouterPartenairesController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/../Configuration/Database.php';
class Gestion {
    public function Afficher()
   {   
        $database = new Database();
        $db = $database->getConnection();
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
        $partenairesController = new AjouterPartenairesController();
        $partenairesController->afficherFormulaire();
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>

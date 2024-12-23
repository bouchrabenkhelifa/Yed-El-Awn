<?php
require_once 'AjouterPartenairesController.php';
require_once 'HeaderController.php';
require_once 'SidebarController.php';
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
        $partenairesController = new AjouterPartenairesController();
        $partenairesController->afficherFormulaire();
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>

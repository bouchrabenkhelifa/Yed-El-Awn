<?php
require_once '../Controllers/AnnoncesController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Configuration/Database.php';

class Annonces {
    public function Afficher()
   {session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location: AdminConnexion.php");  
        exit();
    }
        $database = new Database();
        $db = $database->getConnection();
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
        $AnnoncesController = new AnnoncesController($db);
        $AnnoncesController->afficherAnnonces();
        $AnnoncesController->handleRequest();

 
    

    }
}


$admin = new Annonces();
$admin->Afficher();
?>

<?php
require_once '../Controllers/BenevoleController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   { session_start();
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
        $BenevoleController = new BenevoleController($db);
        $BenevoleController->AfficherBenevole();
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>
